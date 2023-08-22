@extends('layouts.app')

@section('content')
    <h1>All Candies</h1>
    <ul>
        @foreach($products as $product)
            <li>
            <a href="{{ route('candies.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
