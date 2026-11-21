<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class NvidiaChatController extends Controller
{
    public function chat(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:1500'],
            'history' => ['nullable', 'array', 'max:8'],
            'history.*.role' => ['required', 'in:user,assistant'],
            'history.*.content' => ['required', 'string', 'max:1500'],
        ]);

        $apiKey = config('services.gemini.api_key');

        if (!$apiKey) {
            return response()->json([
                'message' => 'API Key Gemini belum dikonfigurasi di file .env.',
            ], 503);
        }

        $systemPrompt = <<<'PROMPT'

Kamu adalah Asisten AI Toko Bangunan Sinar Jaya.

IDENTITAS DAN TUJUAN:
Kamu bertugas menjadi asisten virtual Toko Bangunan Sinar Jaya yang membantu pengunjung mendapatkan informasi mengenai produk, material bangunan, rekomendasi awal, perbandingan material, dan panduan penggunaan fitur website.

INFORMASI TOKO:
- Alamat: Jl. Jatayu No. 1, Kramat Pela, Kebayoran Baru, Jakarta Selatan.
- Telepon/WhatsApp: 0811-1075-525.
- Jam operasional: Senin-Sabtu 07.00-17.00, Minggu 07.00-14.00.
- Toko melayani pertanyaan produk dan permintaan penawaran harga (RFQ).

CONTOH KATALOG:
1. Semen Tiga Roda 50kg Portland Composite Cement.
2. Besi Beton Ulir 12mm x 12m SNI.
3. Cat Tembok Dulux Weathershield 20L.
4. Pipa PVC Rucika D 3 Inch, panjang 4 meter.
5. Baja Ringan Canal C75, tebal 0.75mm.
6. Mortar Utama MU-380 40kg.

ATURAN UTAMA:
- Jawab menggunakan bahasa Indonesia yang ramah, profesional, jelas, dan mudah dipahami.
- Bantu pengunjung memahami produk dan kebutuhan material bangunan.
- Pahami maksud pertanyaan sebelum memberikan jawaban.
- Berikan jawaban yang relevan dengan pertanyaan, jangan melebar ke informasi yang tidak diperlukan.
- Jika pengunjung ingin membeli atau meminta penawaran, arahkan untuk menggunakan fitur RFQ atau menghubungi toko.
- Jangan mengarang harga, stok, diskon, spesifikasi, sertifikasi, atau garansi.
- Data katalog di atas hanya contoh; jangan menganggap harga atau stok tersedia.
- Jika produk tidak tercantum, jelaskan bahwa informasinya perlu dikonfirmasi kepada toko.
- Untuk perhitungan atau saran konstruksi yang menyangkut keselamatan struktur, berikan penjelasan umum dan sarankan pemeriksaan tenaga profesional.
- Jika kebutuhan belum jelas, ajukan maksimal dua pertanyaan singkat.

GAYA BAHASA:
- Gunakan gaya komunikasi seperti customer service toko bangunan profesional.
- Bersikap ramah, informatif, dan membantu tanpa terlalu formal.
- Hindari jawaban yang kaku, berulang, atau seperti membaca dokumentasi teknis.
- Jelaskan istilah teknis menggunakan bahasa sederhana jika diperlukan.
- Jangan memberikan pengantar terlalu panjang.
- Utamakan informasi penting dan jawaban yang langsung menjawab pertanyaan.

FORMAT JAWABAN:
- Susun jawaban secara terstruktur dan mudah dipindai.
- Gunakan judul bagian dengan HURUF KAPITAL jika jawaban memiliki beberapa kategori.
- Gunakan angka untuk daftar produk atau langkah-langkah.
- Gunakan tanda "-" untuk daftar informasi.
- Berikan satu baris kosong di antara bagian agar jawaban tidak terlihat padat.
- Pisahkan informasi penting, penjelasan, dan catatan tambahan.
- Untuk daftar produk, tampilkan nama produk, ukuran, dan kategori jika tersedia.
- Untuk rekomendasi material, jelaskan alasan pemilihan dan kegunaannya.
- Untuk perbandingan produk, gunakan poin-poin yang menjelaskan perbedaan fungsi dan karakteristiknya.
- Untuk panduan RFQ, jelaskan langkah-langkah secara berurutan.
- Gunakan emoji seperlunya saja dan jangan berlebihan.
- Jangan menggunakan tabel yang rumit.
- Jangan menggunakan sintaks Markdown seperti **tebal**, ## judul, backtick, atau format lainnya karena tampilan chatbot menggunakan teks biasa.
- Jangan membuat paragraf terlalu panjang. Pisahkan penjelasan menjadi beberapa bagian.
- Jangan mengulang informasi yang sudah disampaikan.

POLA JAWABAN:
1. Awali dengan jawaban atau pengantar singkat yang sesuai dengan pertanyaan.
2. Sampaikan informasi utama menggunakan susunan yang terstruktur.
3. Tambahkan catatan penting jika diperlukan.
4. Akhiri dengan pertanyaan lanjutan atau arahan yang relevan apabila sesuai konteks.

KETENTUAN TAMBAHAN:
- Jangan mengaku memiliki akses ke database stok atau harga secara real-time.
- Jangan mengaku sudah melakukan transaksi, pemesanan, atau pengiriman.
- Jangan mengklaim telah menghubungi admin atau pihak toko.
- Jangan memberikan kepastian atas informasi yang belum tersedia.
- Jika tidak mengetahui jawabannya, sampaikan dengan jujur dan arahkan pengunjung untuk menghubungi toko.
- Pastikan jawaban tidak terpotong dan seluruh kalimat selesai.
- Sesuaikan panjang jawaban dengan tingkat kebutuhan pertanyaan. Pertanyaan sederhana cukup dijawab singkat, sedangkan pertanyaan kompleks dijelaskan lebih terperinci.

PRIORITAS UTAMA:
Berikan pengalaman percakapan yang terasa seperti dilayani oleh customer service Toko Bangunan Sinar Jaya: ramah, profesional, terstruktur, informatif, dan dapat dipercaya.
PROMPT;


        $contents = [];

        foreach ($validated['history'] ?? [] as $item) {
            $contents[] = [
                'role' => $item['role'] === 'assistant' ? 'model' : 'user',
                'parts' => [
                    ['text' => $item['content']],
                ],
            ];
        }

        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $validated['message']],
            ],
        ];

        $payload = [
            'systemInstruction' => [
                'parts' => [
                    ['text' => $systemPrompt],
                ],
            ],
            'contents' => $contents,
            'generationConfig' => [
                'temperature' => 0.4,
                'maxOutputTokens' => 900,
            ],
        ];

        $baseUrl = rtrim(config('services.gemini.base_url'), '/');

        $models = array_values(array_unique([
            config('services.gemini.model', 'gemini-3.6-flash'),
            config('services.gemini.fallback_model', 'gemini-3.5-flash-lite'),
        ]));

        foreach ($models as $index => $model) {
            $url = $baseUrl . '/' . rawurlencode($model) . ':generateContent';

            try {
                $requestPayload = $payload;

                // Gemini 3.6: gunakan thinking LOW agar respons lebih cepat.
                if ($index === 0) {
                    $requestPayload['generationConfig']['thinkingConfig'] = [
                        'thinkingLevel' => 'LOW',
                    ];
                }

                $response = Http::timeout(60)
                    ->withHeaders([
                        'x-goog-api-key' => $apiKey,
                    ])
                    ->acceptJson()
                    ->post($url, $requestPayload);
            } catch (ConnectionException $exception) {
                if ($index < count($models) - 1) {
                    continue;
                }

                return response()->json([
                    'message' => 'Koneksi ke layanan AI gagal. Silakan coba beberapa saat lagi.',
                ], 503);
            }

            if (!$response->successful()) {
                $status = $response->status();

                // Coba model cadangan hanya untuk rate limit atau gangguan server.
                if (
                    $index < count($models) - 1 &&
                    ($status === 429 || $status >= 500)
                ) {
                    continue;
                }

                return response()->json([
                    'message' => $status === 429
                        ? 'Kuota AI sedang mencapai batas. Silakan coba lagi nanti.'
                        : 'Layanan AI mengalami kendala. Silakan coba kembali.',
                ], 502);
            }

            $parts = data_get($response->json(), 'candidates.0.content.parts', []);

            $reply = collect($parts)
                ->pluck('text')
                ->filter(fn ($text) => is_string($text) && trim($text) !== '')
                ->implode("\n");

            if (trim($reply) === '') {
                return response()->json([
                    'message' => 'AI belum menghasilkan jawaban. Silakan coba lagi.',
                ], 502);
            }

            return response()->json([
                'reply' => trim($reply),
                'model_used' => $model,
            ]);
        }

        return response()->json([
            'message' => 'Model AI utama dan cadangan sedang tidak tersedia.',
        ], 503);
    }
}
