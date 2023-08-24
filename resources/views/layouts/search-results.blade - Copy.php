@extends('layouts.app')

@section('content')
<style>
    .custom-candy-image {
        width: 250px;
        height: auto;
    }
</style>
    <div class="container">
        <h1>Search Results</h1>

        @if(count($candies) > 0)
            <ul class="list-group">
                @foreach($candies as $candy)
                    <li class="list-group-item">
                        <div class="row align-items-center">
                        <div class="col-12 col-md-3 mb-3 mb-md-0 text-center">
                            <img src="{{ asset($candy->image) }}" alt="{{ $candy->name }}" class="product-img">
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

<div class="col-xl-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ asset($candy->image) }}" alt="{{ $candy->name }}" class="product-img">
                <div class="card-body text-left">
                    <h2><a href="{{ route('candies.show', $candy->id) }}">{{ $candy->name }}</a></h2>
                    <p>{{ $candy->description }}</p>

                    <div class="card-text"></div>
                    <div class="card-text-add">
                    </div>
                </div>
            </div>
        </div>



