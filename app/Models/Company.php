<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $perPage = 10;

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
