@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
    <div class="container w-75">


                            <table class="table table-bordered ">

                                {{-- Delete successfully! --}}
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="">
                                            <td class="whitespace-nowrap px-2 py-2 ">{{ $product->id }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">{{ $product->name }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">{{ $product->color }}</td>
                                            <td class="whitespace-wrap ppx-2 py-2">{{ $product->description }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">{{ $product->price }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">
                                                <img src="{{ asset($product->image) }}" alt="Product Image" width="150px">
                                            </td>
                                            </td>

                                            <td class="whitespace-nowrap px-2 py-2">
                                                <a href="{{ route('admin.products.edit', $product) }}"
                                                    class="text-blue-500 hover:underline">
                                                    <button type="submit" class="btn btn-info btn-block">
                                                        Edit
                                                    </button>
                                                </a>
                                                <form method="post"
                                                    action="{{ route('admin.products.destroy', $product) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" mt-2 btn btn-danger btn-block">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                <a class="btn btn-success btn-lg"
                                    href="{{ route('admin.products.create') }}">Add product</a>
                            </div>


    </div>
@endsection
