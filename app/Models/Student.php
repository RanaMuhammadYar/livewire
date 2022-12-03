<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'image',
        'date',
        'time',
        'gender',
        'checkbox',
        'city',
        'gallery',
        'color',
    ];
}
