<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
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

    ];
}
