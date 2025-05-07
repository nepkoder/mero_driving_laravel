<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $table = 'userdata';
    protected $fillable = [
        'full_name',
        'email',
        'dob',
        'role',
        'phone',
        'bio',
        'profile_photo',
    ];
}
