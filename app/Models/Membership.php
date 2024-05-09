<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = [
        'saloon_id','name', 'duration', 'session', 'unit', 'additional_discount', 'description', 'price', 'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }


    public function type()
    {
        return $this->morphTo();
    }
}
