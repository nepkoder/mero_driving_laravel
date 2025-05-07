<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructor';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'license_no',
        'vehicle_type',
        'description'
    ];
    //
}
