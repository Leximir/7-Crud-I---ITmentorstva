@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-4">Welcome to the about page !</h2>
                <p class="lead">
                    The current time is <strong>{{ date("H:i:s") }}</strong>
                </p>
            </div>
        </div>
    </div>

@endsection
