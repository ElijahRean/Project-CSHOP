@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">

                                {{-- Delete successfully! --}}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th >ID</th>
                                        <th class="w-25">Name</th>
                                        <th class="w-25">Color</th>
                                        <th>Price</th>
                                        <th class="w-25">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $product->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $product->username }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $product->color }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $product->price }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <img src="{{ asset($product->image) }}" alt="Product Image" width="100">
                                            </td>
                                            </td>

                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-500 hover:underline">
                                                <button type="submit" class="text-red-500 hover:underline">
                                                    Edit
                                                </button>
                                            </a>
                                                <form method="post"
                                                    action="{{ route('admin.products.destroy', $product) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:underline">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="flex flex-col-reverse mt-4">
                                <a class="mr-auto text-black bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded"
                                    href="{{ route('admin.products.create') }}">{{ 'Add product' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
