<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class ProductController extends Controller
{
    public function pendings()
    
    {
        if (!Auth::check()) {
            return view('products.create');
        }
    
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        

        return view('products.pendings', compact('products'));
    }
    public function index()
    
    {
        if (!Auth::check()) {
            return view('index', ['message' => 'Please log in to create a product.']);


        }
    
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        

        return view('index', compact('products'));
    }
    public function rejected()
    
    {
        
        $products = Product::All();
        

        return view('admin/rejected', compact('products'));
    }
    public function approved()
    
    {
        
        $products = Product::All();
        

        return view('admin/approved', compact('products'));
    }


    public function search(Request $request)
{
    if (!Auth::check()) {
        return view('products.create');
    }

    $user = Auth::user();
    $productCode = $request->input('product_code');

    // Perform the search query using your model and filter by user_id
    $products = Product::where('user_id', $user->id)
        ->where('product_code', $productCode)
        ->get();

    // Pass the search results to a view and display them
    return view('search_results', compact('products'));
}


    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }



    
    //
    public function create()
{
    return view('products.create');
}

public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // If the user is not authenticated, redirect to the login page
            return redirect()->route('login')->with('error', 'Please log in to create a product.');
        }

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

        // Associate the product with the authenticated user
        $product->user_id = auth()->user()->id;

        if ($request->hasFile('product_image')) {
            $file = time() . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->move('productsImages/', $file);
            $product->product_image = $file;
        }

        $product->save();

        return redirect('/test')->with('success', 'Product has been added successfully!');
    }

    // ...
}
