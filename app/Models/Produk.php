<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'satuan',
        'harga_estimasi',
        'foto_produk',
    ];

    protected $casts = [
        'harga_estimasi' => 'decimal:2',
    ];

    /**
     * Produk dimiliki oleh satu kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    /**
     * Produk dapat muncul di banyak detail RFQ.
     */
    public function detailRfqs()
    {
        return $this->hasMany(DetailRfq::class, 'produk_id');
    }
}