<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withCount('bid')->get();
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
}
