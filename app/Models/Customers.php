<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customers extends Authenticatable
{
    protected $table = 'customers';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'email',
        'password',
    ];
}
