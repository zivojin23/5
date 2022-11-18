<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'phone_number',
        'role_id'
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }
}
