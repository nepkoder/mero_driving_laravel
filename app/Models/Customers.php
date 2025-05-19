<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customers extends Authenticatable
{
    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image'
    ];
}

