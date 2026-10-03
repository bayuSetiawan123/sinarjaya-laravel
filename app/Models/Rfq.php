<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    use HasFactory;

    protected $table = 'rfqs';

    protected $fillable = [
        'user_id',
        'tanggal_pengajuan',
        'catatan_pengiriman',
        'status_pesanan',
    ];

    protected $casts = [
        'tanggal_pengajuan' => 'date',
    ];

    /**
     * RFQ dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * RFQ memiliki banyak detail RFQ.
     */
    public function detailRfqs()
    {
        return $this->hasMany(DetailRfq::class, 'rfq_id');
    }
}