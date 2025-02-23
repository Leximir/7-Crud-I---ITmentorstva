@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")
    <div class="container">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }} $</p>

        <form method="POST" action="{{ route('cart.add') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="text" name="amount" placeholder="Enter amount">
            <button type="submit">Add To Cart</button>
        </form>
    </div>


@endsection
