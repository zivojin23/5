<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->belongsToMany(Player::class, 
        'movie_player', 
        'movie_id', 
        'player_id');
    }
}
