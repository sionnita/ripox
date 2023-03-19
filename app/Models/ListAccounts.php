<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAccounts extends Model
{
    use HasFactory;

	protected $fillable = [
        'list_id',
        'name',
        'image',
        'description',
        'price',
        'status'
    ];

    public function transaksi()
	{
		return $this->belongsTo(AccountTransactions::class, 'account_id');
	}
}
