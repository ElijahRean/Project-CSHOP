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
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="color">Color</label>
        <input id="color" class="form-control" type="text" name="color" value="{{ old('color') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="description">Description</label>
        <input id="description" class="form-control" type="text" name="description" value="{{ old('description') }}" required>
    </div>

    <div class="form-group mt-4">
        <label for="price">Price</label>
        <input id="price" class="form-control" type="number" step="0.01" pattern="[0-9]*" name="price" value="{{ old('price') }}" required>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-success btn-lg mb-5 mt-2">Add product</button>
</form>
        </div>

@endsection
