<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;// Assuming you have a "Product" model

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products

        return view('admin.products.index', compact('products'));
    }
}