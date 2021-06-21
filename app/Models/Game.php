<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
