@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-4">Welcome to the shop page !</h2>

                <ol>
                @foreach($allProducts as $product)

                    <li>
                        <a href="">{{ $product->name }}</a>
                    </li>


                @endforeach
                </ol>

            </div>
        </div>
    </div>
@endsection
