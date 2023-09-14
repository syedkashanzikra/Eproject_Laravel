<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function pendings()
    {
        $products = Product::all(); // Fetch all products

        return view('products.pendings', compact('products'));
    }



    
    //
    public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_code' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_details' => 'required|string',
        'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional: Add image validation rules
    ]);

    $product = new Product([
        'product_code' => $validatedData['product_code'],
        'product_name' => $validatedData['product_name'],
        'product_details' => $validatedData['product_details'],
    ]);

    if ($request->hasFile('product_image')) {
        $imagePath = $request->file('product_image')->store('images/product_images');
        $product->product_image = $imagePath;
    }

    $product->save();

    return redirect('/')->with('success', 'Product has been added successfully!');
}
   

}
