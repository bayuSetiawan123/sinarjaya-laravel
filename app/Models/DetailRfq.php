<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRfq extends Model
{
    use HasFactory;

    protected $table = 'detail_rfqs';

    protected $fillable = [
        'rfq_id',
        'produk_id',
        'jumlah_kebutuhan',
    ];

    /**
     * Detail RFQ dimiliki oleh satu RFQ.
     */
    public function rfq()
    {
        return $this->belongsTo(Rfq::class, 'rfq_id');
    }

    /**
     * Detail RFQ mengarah ke satu produk.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}