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
    public function store(ProductRequest $request)
    {
        // return $request;
        if($request->hasFile('display_image'))
        {
            $display_file_name = $request->display_image->getClientOriginalName();
            $request->display_image->storeAs('display_images',$display_file_name,'public');
        }
        else{
            notify()->error('Display Image Failed to Upload!!!');
            return redirect()->back();
        }
        if($request->hasFile('other_images')){
            $other_images_names = [];
            foreach($request->other_images as $image)
            {
                $other_file_name = $image->getClientOriginalName();
                $other_images_names[] = $other_file_name;
                $image->storeAs('other_images',$other_file_name,'public');
            }
        }
        else{
            notify()->error('One of OR All other Image Failed to Upload!!!');
            return redirect()->back();
        }
        // $product = auth()->user()->product()->create($request->all());
        $product = new Product();
        $product->user_id = Auth::id();
        $product->display_image = $display_file_name;
        $product->other_images = json_encode($other_images_names);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->condition = $request->condition;
        $product->ending_date = $request->ending_date;
        $product->starting_price = $request->starting_price;

        if($product->save()){
            notify()->success('Product Uploaded and ready');
            return redirect()->back();
        }
        else{
            notify()->error('Product Failed to Upload!!!');
            return redirect()->back();
        }
    }

}
