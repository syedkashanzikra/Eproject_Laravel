<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming User is your User model
use App\Models\Product; // Assuming Product is your Product model
use Carbon\Carbon;

class DailyTrafficController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $newUserCount = User::whereDate('created_at', $date)->count();
        $newProductCount = Product::whereDate('created_at', $date)->count();

        return view('admin/traffic', compact('newUserCount', 'newProductCount'));
    }
}
