<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_type',
        'customer_id',
        'guest_name',
        'entry_date',
        'start_time',
        'end_time',
        'payment_method',
        'trainer_id',
    ];
        public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Userdata::class, 'trainer_id');
    }

}
