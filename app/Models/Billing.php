<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billings';

    protected $fillable = [
        'booking_id',
        'room_type_id',
        'room_quantity',
        'date',
        'room_price'
    ];
}
