<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $perPage = 10;

    public function getFullPriceAttribute()
    {
        $formattedNumber = number_format($this->price, "2");
        return "$${formattedNumber} MXN";
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function genre()
    {
        return $this->belongsTo(GameGenre::class);
    }
}
