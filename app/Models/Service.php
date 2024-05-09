<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function saloon()
    {
        return $this->belongsTo(Saloon::class);
    }

    public function memberships()
    {
        return $this->belongsToMany(Membership::class, 'membership_services');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
    public function scopeMe($query)
    {
        $saloon =  Saloon::where('vendor_id', auth('vendor')->user()->id)->first();

        return $query->where('saloon_id', $saloon->id);
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
