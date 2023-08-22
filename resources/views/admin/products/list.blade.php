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
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Name</th>
                                    <th scope="col" class="px-6 py-4">Email</th>
                                    <th scope="col" class="px-6 py-4">Role</th>
                                    <th scope="col" class="px-6 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $product)
                                    <tr class="border-b dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $user->id }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            {{ __($user->is_admin ? 'Admin' : 'Customer') }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-right">
                                            @if ($user->id !== Auth::user()->id)
                                                <form method=post action="{{ }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-button class="ml-auto">
                                                        {{ __('Delete') }}
                                                    </x-button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        <div class="flex flex-col-reverse mt-4">
                            <a class="mr-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded"
                                href="#">{{ 'Add product' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
