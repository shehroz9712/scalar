<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    // protected $fillable = ['first_name','name', 'email', 'password', 'image'];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'name',
        'phone',
        'dob',
        'gender',
        'country',
        'state',
        'city',
        'address',
        'password',  // Assuming password hashing is done elsewhere
        'loyalty',
        'appointment',
        'email_marketing',
        'marketing_notification',
        'image',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function card()
    {
        return $this->hasMany(UserCard::class);
    }
    public function scopeMe($query)
    {
        return $query->where('id', auth()->user()->id);
    }
}
