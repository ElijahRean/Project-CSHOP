@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
    <form class="max-w-7xl mx-auto px-4 mt-10 flex flex-col lg:w-1/2" method="POST"
        action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h3>Edit products</h3>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group mt-4">
            <label for="color">Color</label>
            <input id="color" class="form-control @error('color') is-invalid @enderror" type="text" name="color" value="{{ $product->color }}" required>
        </div>

        <div class="form-group mt-4">
            <label for="description">Description</label>
            <input id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description"
                value="{{ $product->description }}" required>
        </div>

        <div class="form-group mt-4">
            <label for="price">Price</label>
            <input id="price" class="form-control @error('price') is-invalid @enderror" type="number" step="0.01" pattern="[0-9]*" name="price"
                value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">

            @if ($product->image)
                <div class="mt-3">
                    <label>Current Image:</label><br>
                    <img src="{{ asset($product->image) }}" alt="Product Image" width="400px" accept="image/*">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-lg btn-success mt-3 mb-5">Save product</button>
    </form>
    </div>
@endsection
