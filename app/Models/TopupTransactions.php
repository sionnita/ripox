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
}
