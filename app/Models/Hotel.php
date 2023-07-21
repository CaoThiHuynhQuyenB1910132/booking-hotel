<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $table = 'hotels';

    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    public static function getHotelById(string $id): Model|Collection|Builder|array|null
    {
        return Hotel::query()->findOrFail($id);
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
