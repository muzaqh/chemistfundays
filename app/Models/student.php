<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'region_id',
        'contest',
        'date_of_birth',
        'gender',
        'level',
        'school',
        'phone',
        'teacher_name',
        'teacher_email',
        'teacher_phone',
        'ava',
        'id_card',
        'birth_certificate',
        'payment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
        'region_id',
    ];

    
}
