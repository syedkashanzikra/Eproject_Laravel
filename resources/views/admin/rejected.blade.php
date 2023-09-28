@extends('admin.index') <!-- You can extend your app's layout or a different layout -->

@section('admin-body')
<hr class="my-4">
<div class="d-flex justify-content-center align-items-center">
    <div class="text-dark p-3 rounded mb-3" >
        <h2 class="text-center m-0">Rejected Products</h2>
    </div>
</div>




@guest
<div class="bg-danger text-white p-3 d-flex justify-content-center align-items-center rounded mb-3">
    <h6 class="error no-cursor-change">Login to see Products</h6>
</div>
@else
@php
$pendingProducts = [];
$approvedProducts = [];
$rejectedProducts = [];
@endphp

@foreach ($products as $product)
@if ($product->status === 'approved')
@php
$approvedProducts[] = $product;
@endphp
@elseif ($product->status === 'rejected')
@php
$rejectedProducts[] = $product;
@endphp
@else
@php
$pendingProducts[] = $product;
@endphp
@endif
@endforeach

<!-- Display Rejected Products -->
<div class="row">
    @foreach ($rejectedProducts as $product)
    <div class="col-md-6 col-lg-4">
        <!-- Adjust the number of columns as needed -->
        <div class="card product-card">
            <img class="card-img-top"
                src="{{ asset('productsImages/' . $product->product_image) }}"
                alt="{{ $product->product_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_code }}</p>
                <td>
                    <a href="{{ route('admin.products.approve', ['id' => $product->id]) }}" class="btn btn-success">Approve</a>
                    <!-- <a href="{{ route('admin.products.reject', ['id' => $product->id]) }}" class="btn btn-danger">Reject</a> -->
                </td>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
