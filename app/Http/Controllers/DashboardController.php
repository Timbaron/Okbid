<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalbids = Bid::where('user_id',Auth::id())->with('Product')->get();

        // return $totalbids;
        $bidswon = Product::where('winner',Auth::id())->get();
        return view('Dashboard', compact('user','totalbids','bidswon'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
