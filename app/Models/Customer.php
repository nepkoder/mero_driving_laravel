<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    protected $table = 'customer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'address',
    ];
}

