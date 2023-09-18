<!-- resources/views/search_results.blade.php -->

@extends('layouts.front-end.header-footer-page')  <!-- Use your layout file if different -->

@section('body-page')
<div class="container">
    <h1>Search Results</h1>
    @if(count($products) > 0)
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
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_details }}</td>
                        <td>
                            <img src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}" width="100">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No products found with the given Product Code.</p>
    @endif
</div>
@endsection
