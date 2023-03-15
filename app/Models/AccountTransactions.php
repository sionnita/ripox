<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTransactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_id',
        'name',
        'email',
        'whatsapp',
        'togel',
        'price',
        'status'
    ];
}
