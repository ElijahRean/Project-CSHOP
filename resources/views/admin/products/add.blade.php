@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
<form class="max-w-7xl mx-auto px-4 mt-10 flex flex-col lg:w-1/2" method="POST"
      action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf

    <h3>Add new product</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="color">Color</label>
        <input id="color" class="form-control @error('color') is-invalid @enderror" type="text" name="color" value="{{ old('color') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="description">Description</label>
        <input id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ old('description') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="price">Price</label>
        <input id="price" class="form-control @error('price') is-invalid @enderror" type="number" step="0.01" pattern="[0-9]*" name="price" value="{{ old('price') }}" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>

    <button type="submit" class="btn btn-success btn-lg mb-5 mt-2">Add product</button>
</form>
        </div>

@endsection
