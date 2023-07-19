<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomDetail extends Model
{
    protected $table = 'room_details';

    protected $fillable = [
        'room_id',
        'original_price',
        'selling_price',
        'desc',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
