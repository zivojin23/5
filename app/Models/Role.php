<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name', 
        'role_description', 
        'reports_to'
    ];

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class);
    // }
}
