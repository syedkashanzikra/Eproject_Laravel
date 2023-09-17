<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;// Assuming you have a "Product" model
use Illuminate\Support\Facades\Auth;


class AdminProductController extends Controller

{
    public function __construct()
{
    $this->middleware('check.user.role');
}

    public function index()
    {
        
        $products = Product::all(); // Fetch all products

        return view('admin.products.index', compact('products'));
    }
    public function approve($id)
{
    $product = Product::findOrFail($id);
    $product->update(['status' => 'approved']);
    return redirect()->back()->with('message', 'Product approved successfully');
}

public function reject($id)
{
    $product = Product::findOrFail($id);
    $product->update(['status' => 'rejected']);
    return redirect()->back()->with('message', 'Product rejected');
}


}