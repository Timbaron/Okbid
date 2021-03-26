<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bid()
    {
        return $this->hasMany(Bid::class);
    }
    public function highestBidder()
    {
        return $this->hasOne(Bid::class)->orderBy('bid_amount', 'DESC');
    }
}
