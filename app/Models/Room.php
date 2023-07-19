<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
   protected $table = 'rooms';

   protected $fillable = [
       'name',
       'status'
   ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function room_type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function room_details(): HasMany
    {
        return $this->hasMany(RoomDetail::class);
    }
}
