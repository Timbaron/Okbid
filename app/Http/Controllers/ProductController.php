<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Bid;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withCount('bid')->with('highestBidder')->get();
        return view('products',compact('products'));
    }
    public function bid(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        Bid::create([
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'bid_amount' => $request->bid_amount,
        ]);
        return redirect()->back();
    }
    public function sell()
    {
        $user = Auth::user();
        return view('sell', compact('user'));
    }
    

}
