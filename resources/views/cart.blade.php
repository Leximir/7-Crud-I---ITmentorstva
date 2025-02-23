@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    @foreach($cart as $product => $amount)
        {{ $product." ".$amount }}
    @endforeach

@endsection
