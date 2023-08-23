@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ $product->image }}" alt="{{ $product->name }}">
    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Color: {{ $product->color }}</p>
    <p>Brand: {{ $product->brand }}</p>
    <p>Flavour: {{ $product->flavour }}</p>
    <p>Type: {{ $product->type }}</p>
@endsection
