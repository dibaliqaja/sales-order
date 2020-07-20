@extends('layouts.home')
@section('title_page','Edit Customer')
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

    <form action="{{ route('customers.update', $customer->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $customer->name) }}">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <textarea name="address" class="form-control">{{ old('address', $customer->address) }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Telepon</label>
            <input type="number" min="1" class="form-control" name="telepon" value="{{ old('telepon', $customer->telepon) }}">
        </div>
        <div class="form-group">
            <a href="{{ route('customers.index') }}" class="btn btn-danger">Back</a>
            <button class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection
