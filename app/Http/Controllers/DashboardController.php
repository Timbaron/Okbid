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
        $totalbids = count(DB::select('select * from bids where user_id = ?', [Auth::id()]));
        $bidswon = count(DB::select('select * from products where winner = ?', [Auth::id()]));
        return view('Dashboard', compact('user','totalbids','bidswon'));
    }
}
