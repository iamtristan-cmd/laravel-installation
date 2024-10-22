<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table ="resume";
    protected $fillable= [
        'name',
        'email',
        'phone',
        'address',
        'objective',
        'education',
        'skills',
        'hobbies',
    ];
}
