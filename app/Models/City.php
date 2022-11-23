<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name', 
        'city_pop', 
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
