<!-- resources/views/admin/products/index.blade.php -->
@extends('layouts.front-end.header-footer')

@section('body')
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
                <img src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}" width="100">

                </td>
                <td>
                    @if ($product->status === 'approved')
                        Approved
                    @elseif ($product->status === 'rejected')
                        Rejected
                    @else
                        <a href="{{ route('admin.products.approve', ['id' => $product->id]) }}" class="btn btn-success">Approve</a>
                        <a href="{{ route('admin.products.reject', ['id' => $product->id]) }}" class="btn btn-danger">Reject</a>
                    @endif
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
