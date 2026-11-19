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

ATURAN:
- Jawab dalam bahasa Indonesia yang ramah, jelas, dan tidak bertele-tele.
- Bantu pengunjung memahami produk dan kebutuhan material bangunan.
- Jika pengunjung ingin membeli atau meminta penawaran, arahkan untuk menghubungi toko atau menggunakan fitur RFQ.
- Jangan mengarang harga, stok, diskon, spesifikasi, sertifikasi, atau garansi.
- Data katalog di atas hanya contoh; jangan menganggap harga atau stok tersedia.
- Jika produk tidak tercantum, jelaskan bahwa informasinya perlu dikonfirmasi kepada toko.
- Untuk perhitungan atau saran konstruksi yang menyangkut keselamatan struktur, berikan penjelasan umum dan sarankan pemeriksaan tenaga profesional.
- Jika kebutuhan belum jelas, ajukan maksimal dua pertanyaan singkat.
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
                $response = Http::timeout(60)
                    ->withHeaders([
                        'x-goog-api-key' => $apiKey,
                    ])
                    ->acceptJson()
                    ->post($url, $payload);
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
