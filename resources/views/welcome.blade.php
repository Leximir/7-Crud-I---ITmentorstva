@extends("layout.layout")

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-4">Welcome to the Home page!</h2>

                @if($currentHour >= 0 && $currentHour < 12)
                    <p class="lead">Good Morning</p>
                @else
                    <p class="lead">Good Afternoon</p>
                @endif

                <p class="lead">
                    The current time is <strong>{{ $currentTime }}</strong>
                </p>

                @foreach($latestProducts as $product)
                    <p>{{ $product->name }}</p>
                @endforeach
            </div>
        </div>

    </div>

@endsection

