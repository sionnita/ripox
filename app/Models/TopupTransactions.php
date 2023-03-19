<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopupTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'id_akun',
        'server_number',
        'id_topup',
        'id_bayar',
        'price',
        'admin',
        'total',
        'status'
    ];

    public function list()
	{
		return $this->belongsTo(NominalTopups::class, 'id_topup');
	}

    public function bayar()
	{
		return $this->belongsTo(PaymentMethods::class, 'id_bayar');
	}
}
