@extends('layouts.home')
@section('title_page','Add Product')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="number" min="1" class="form-control" name="product_price" value="{{ old('product_price') }}">
        </div>
        <div class="form-group">
            <a href="{{ route('products.index') }}" class="btn btn-danger">Back</a>
            <button class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
