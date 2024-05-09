<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    use HasFactory;



    /**
     * Get the user that owns the Review
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function saloon()
    {
        return $this->belongsTo(Saloon::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
