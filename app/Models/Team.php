<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    // 'first_name',
    // 'last_name',
    // 'email',
    // 'phone',
    // 'saloon_id',
    // 'experience',
    // 'image' 
    // ];
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
