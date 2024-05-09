<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['status'];
    /**
     * Get the user that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function saloon()
    {
        return $this->belongsTo(Saloon::class, 'saloon_id');
    }

    /**
     * Get the saloon that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function services()
    {
        return $this->morphMany(BookingService::class, 'typeable');
    }



    public function scopeMyBooking($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }

    public function scopeComplete($query)
    {
        return $query->where('status', 'complete');
    }
}
