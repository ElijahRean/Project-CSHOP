@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden ">
                            <table class="ml-3 mr-3 table table-bordered w-75">

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
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="">
                                            <td class="whitespace-nowrap px-2 py-2 ">{{ $user->id }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">{{ $user->name }}</td>
                                            <td class="whitespace-nowrap px-2 py-2">{{ $user->email }}</td>


                                            <td class="px-2 py-2">
                                                <form method="post"
                                                    action="{{ route('admin.users.destroy', $user) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                <a class="btn btn-success btn-lg ml-3"
                                    href="{{ route('admin.users.store') }}">Add user</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
