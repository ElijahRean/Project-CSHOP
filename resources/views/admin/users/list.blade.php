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

                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">
                                    <li class="page-item {{ $users->previousPageUrl() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    @for ($i = 1; $i <= $users->lastPage(); $i++)
                                        <li class="page-item {{ $i == $users->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href=" {{ $users->url($i) }}" aria-label="Next">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="page-item {{ $users->nextPageUrl() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">

                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="">
                                <a class="btn btn-success btn-lg btn-block"
                                    href="{{ route('admin.users.create') }}">Add user</a>
                            </div>

    </div>
@endsection
