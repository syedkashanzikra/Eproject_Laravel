@extends('admin.index') <!-- You can extend your app's layout or a different layout -->

@section('admin-body')
<hr class="my-4">
<div class="bg-success text-white p-2 d-flex justify-content-center align-items-center rounded mb-3" style="width: 2in;">
    <h2>approved</h2>
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
    @php $count = 0; @endphp
    @foreach ($approvedProducts as $product)
    @if ($count < 3)
    <div class="col-md-6 col-lg-4">
        <!-- Adjust the number of columns as needed -->
        <div class="card product-card">
            <img class="card-img-top"
                src="{{ asset('productsImages/' . $product->product_image) }}"
                alt="{{ $product->product_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_code }}</p>
            </div>
        </div>
    </div>
    @php $count++; @endphp
    @endif
    @endforeach
</div>
@endif
@endsection
