<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $dates = ['expiry'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCheck($query, $voucher)
    {
        $coupon = $query->where('code', $voucher)->first();

        $query = $query->where('code', $voucher)
            ->where('expiry', '>=', now())
            ->where('usage', '>', optional($coupon)->no_of_use ?? 0);

        if ($coupon->user_id) {
            $query->where('user_id', Auth::id());
        }

        return $query;
    }
}
