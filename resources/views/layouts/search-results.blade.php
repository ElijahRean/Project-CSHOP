@extends('layouts.app')

@include('partials.header')
@section('content')
    <div class="container">
        <h1>Search Results</h1>

        @if(count($candies) > 0)
            <ul class="list-group">
                @foreach($candies as $candy)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                        <div class="col-12 col-md-3 mb-3 mb-md-0 text-center">
                            <img src="{{ asset($candy->image) }}" alt="{{ $candy->name }}" class="custom-candy-image">
                            </div>
                            <div class="col-12 col-md-9">
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


<style>
    .custom-candy-image {
        width: 250px;
        height: auto;
    }
</style>

