<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
class Vendor extends Authenticatable
{
    // use HasFactory;
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    // protected $fillable = ['first_name','name', 'email', 'password', 'image'];
    protected $guarded = [];

    public function scopeMe($query)
    {
        return $query->where('id', Auth::id());
    }
    public function card()
    {
        return $this->hasMany(UserCard::class);
    }
}
