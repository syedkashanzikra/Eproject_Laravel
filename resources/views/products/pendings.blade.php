@extends('layouts.front-end.header-footer-page')
@section('body-page')

<div class="container">
    <h1>Product List</h1>
    <div class="table-responsive">
        <table class="table table-bordered col-sm-2 col-md-4 col-lg-12">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th  class="d-none d-sm-table-cell">Product Details</th>
                    
                    <!-- Hide on small and medium screens -->
                    <th class="d-none d-md-table-cell">Product Image</th>
               
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td  class="d-none d-sm-table-cell">{{ $product->product_details }}</td>
                    <td class="d-none d-md-table-cell">
                        <img src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}" width="100" >
                    </td>
                    <td>
                        @if ($product->status === 'approved')
                            <span class="badge badge-success">Approved</span>
                        @elseif ($product->status === 'rejected')
                            <span class="badge badge-danger">Rejected</span>
                        @else
                            <span class="badge badge-warning">Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
