<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListGame extends Model
{
    use HasFactory;

    public function nominal()
	{
		return $this->hasMany(NominalTopups::class, 'list_id');
	}
}
