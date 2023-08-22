@extends('layouts.admin')

@include('admin.dashboard')

@section('content')

    <form class="max-w-7xl mx-auto px-4 mt-10 flex flex-col lg:w-1/2" method="POST"
        action="" enctype="multipart/form-data">
        @csrf
        <h3>Add new product</h3>
        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
        </div>

        <div class="mt-4">
            <x-label for="color" :value="__('color')" />
            <x-input id="color" class="block mt-1 w-full" type="text" name="color" :value="old('color')" required />
        </div>

        <div class="mt-4">
            <x-label for="description" :value="__('description')" />
            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
        </div>

        <div class="mt-4">
            <x-label for="price" :value="__('price')" />
            <x-input id="price" class="block mt-1 w-full" type="value" name="description" :value="old('price')" required />
        </div>

        <div>
            <label for="picture">Picture</label>
            <input type="file" class="form-control box file-upload" id="picture" name="picture">
        </div>

        <x-button class="ml-auto mt-4">
            {{ __('Add') }}
        </x-button>
    </form>

@endsection
