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
                                        <th scope="col"><a
                                            href="{{ route('admin.users.index', ['sort' => 'id', 'order' => $sortColumn === 'id' && $sortOrder === 'asc' ? 'desc' : 'asc']) }}"
                                            class="mr-4">ID
                                            @if ($sortColumn === 'id')
                                                @if ($sortOrder === 'asc')
                                                    <i class="fas fa-sort-up ml-1"></i>
                                                @else
                                                    <i class="fas fa-sort-down ml-1"></i>
                                                @endif
                                            @else
                                                <i class="fas fa-sort ml-1"></i>
                                            @endif
                                        </a></th>
                                        <th scope="col">Userame</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="">
                                            <td class="text-align">{{ $user->id }}</td>
                                            <td class="">{{ $user->username }}</td>
                                            <td class="">{{ $user->email }}</td>


                                            <td class="">
                                                <form method="POST"
                                                    action="{{ route('admin.users.destroy', $user) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                <a class="btn btn-success btn-lg btn-block"
                                    href="{{ route('admin.users.create') }}">Add user</a>
                            </div>

    </div>
@endsection
