<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function typeable()
    {
        return $this->morphTo();
    }
    public function saloon()
    {
        return $this->belongsTo(Saloon::class);
    }
}
