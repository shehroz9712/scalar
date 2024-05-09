<?php

namespace App\Models;

use App\Models\OpeningTime;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Saloon extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['average_rating', 'review_count', 'image', 'is_favorite'];
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class); // Assuming your vendor model is called Vendor
    }
    // Saloon.php (Saloon model)

    public function time()
    {
        return $this->belongsTo(OpeningTime::class);
    }

    /**
     * Get all of the Images for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(SaloonImage::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favourite::class);
    }
    public function getIsFavoriteAttribute()
    {
        $userId = Auth::id();
        if ($userId) {
            return $this->favorites()->where('user_id', $userId)->exists();
        }
        return false;
    }
    public function getImageAttribute()
    {
        $image = $this->images()->first();

        if ($image) {
            return $image->image;
        }

        return null;
    }

    /**
     * Get all of the deals for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deals(): HasMany
    {
        return $this->hasMany(SaloonDeal::class);
    }

    /**
     * Get all of the reviews for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class)->with('user');
    }
    /**
     * Get all of the service for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }
    /**
     * Get all of the timing for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timing(): HasMany
    {
        return $this->hasMany(OpeningTime::class);
    }

    /**
     * Get all of the service for the Saloon
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class);
    }


    public function getAverageRatingAttribute(): float
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function getReviewCountAttribute(): int
    {
        return $this->reviews()->count();
    }
}
