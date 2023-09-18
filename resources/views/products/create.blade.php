<!-- resources/views/products/create.blade.php -->

@extends('layouts.front-end.header-footer-page')

@section('body-page')
<div class="container">
    <h1>Add a Product</h1>
    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_code">Product Code:</label>
            <input type="text" name="product_code" id="product_code" class="form-control">
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="product_details">Product Details:</label>
            <textarea name="product_details" id="product_details" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="product_image">Product Image:</label>
            <input type="file" name="product_image" id="product_image" class="form-control-file">
        </div>
        <button type="submit" value="Save" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
