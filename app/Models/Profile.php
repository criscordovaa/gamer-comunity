<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $perPage = 10;

    public function getUsernameAttribute()
    {
        return $this->user->username;
    }

    public function getFullGenreAttribute()
    {
        $transformGenre = [
            "male" => "Hombre",
            "female" => "Mujer",
            "other" => "Otro"
        ];
        return $transformGenre[$this->genre];
    }

    public function getEmailAttribute()
    {
        return $this->user->email;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
