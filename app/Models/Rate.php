<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rate';

    protected $fillable = [
        'service_type',
        'vehicle_type',
        'rate_amount',
        'duration',
        'description',
    ];
}
