<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Bid extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Product()
    {
        return $this->belongsTo(Product::class)->orderBy('created_at','DESC');
    }
    public function highestBidder()
    {
        return $this->hasOne(Bid::class)->orderBy('bid_amount','DESC');
    }
}
