@extends('layouts.app')

@include('partials.header');
@section('content')
    <div class="container">
        <h1>Search Results</h1>

        @if(count($candies) > 0)
            <ul class="list-group">
                @foreach($candies as $candy)
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($candy->image) }}" alt="{{ $candy->name }}" width="200">
                            <div class="ml-3">
                                <h2><a href="{{ route('candies.show', $candy->id) }}">{{ $candy->name }}</a></h2>
                                <p>{{ $candy->description }}</p>

                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No results found.</p>
        @endif
    </div>
@endsection

