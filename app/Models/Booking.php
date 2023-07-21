<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{

    protected $table = 'bookings';

    protected $fillable = [
        'hotel_id',
        'check_in',
        'check_out',
        'notes',
        'service_id',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
