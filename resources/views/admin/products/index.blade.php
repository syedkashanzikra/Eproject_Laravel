@extends('admin.index')
@section('admin-body')

<div class="container">
    <h1>Product List</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table col-sm-2 col-md-4 col-lg-12">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th class="d-none d-sm-table-cell">Product Details</th>
                        <th class="d-none d-sm-table-cell">Users</th>
                        <th class="d-none d-md-table-cell">Product Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @if ($product->status === 'Pending' || is_null($product->status))
                            <tr>
                                <td>{{ $product->product_code }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td class="d-none d-sm-table-cell">{{ $product->product_details }}</td>
                                <td class="d-none d-sm-table-cell">{{ $product->user_id }}</td>
                                <td class="d-none d-md-table-cell">
                                    <img src="{{ asset('productsImages/' . $product->product_image) }}" alt="{{ $product->product_name }}" width="100">
                                </td>
                                <td>
                                    {{ $product->status }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.products.approve', ['id' => $product->id]) }}" class="btn btn-success">Approve</a>
                                    <a href="{{ route('admin.products.reject', ['id' => $product->id]) }}" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
