<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'make',
        'model',
        'year',
        'plate_number',
        'vehicle_type',
        'mileage',
        'features',
        'photo'
    ]; 
    
    
}
