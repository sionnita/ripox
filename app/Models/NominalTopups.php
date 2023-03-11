<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NominalTopups extends Model
{
    use HasFactory;

    public function game()
	{
		return $this->belongsTo(ListGame::class, 'list_id');
	}
}
