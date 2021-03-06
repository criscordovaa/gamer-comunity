<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $perPage = 10;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
