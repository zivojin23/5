<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    public function conferences()
    {
        return $this->hasMany(Conference::class);
    }

    public function divisions()
    {
        return $this->hasManyThrough(Division::class, Conference::class);
    }
}
