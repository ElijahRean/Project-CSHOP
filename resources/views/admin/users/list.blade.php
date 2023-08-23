@extends('layouts.admin')

@include('admin.dashboard')

@section('content')
    <div class="container w-75">

                            <table class="table table-bordered">

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
                                <a class="btn btn-success btn-lg"
                                    href="{{ route('admin.users.create') }}">Add user</a>
                            </div>

    </div>
@endsection
