<!-- resources/views/admin/products/index.blade.php -->

@extends('layouts.front-end.header-footer')



@section('content')
<div class="container">
    <h1>Product List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Details</th>
                <th>Product Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_details }}</td>
                <td>
                    <img src="{{ asset('path/to/your/images/' . $product->product_image) }}" alt="{{ $product->product_name }}" width="100">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
