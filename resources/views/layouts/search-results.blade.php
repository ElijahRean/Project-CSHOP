@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Search Results</h1>

        @if(count($candies) > 0)
            <ul>
                @foreach($candies as $candy)
                <li class="list-group-item card-search">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 mb-3 mb-md-0 text-center">
                            <img src="{{ asset($candy->image) }}" alt="{{ $candy->name }}" class="product-img">
                        </div>
                        <div class="col-12 col-md-6 text-left card-search">
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

