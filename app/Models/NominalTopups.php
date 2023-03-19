<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NominalTopups extends Model
{
    use HasFactory;

	protected $fillable = [
        'list_id',
        'nominal',
        'type',
        'price',
        'status'
    ];

    public function game()
	{
		return $this->belongsTo(ListGame::class, 'list_id');
	}

	public function transaksi()
	{
		return $this->hasMany(TopupTransactions::class, 'id_topup');
	}
}
