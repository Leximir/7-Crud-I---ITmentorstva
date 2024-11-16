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

                <form action="/send-contact" method="POST">

                    @if($errors->any())
                        <p>Greska: {{ $errors->first() }}</p>
                    @endif

                    {{ csrf_field() }}
                    <input name="email" type="email" placeholder="Enter your email address">
                    <input name="subject" type="text" placeholder="Enter your subject">
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                    <button type="submit">Contact Us</button>
                </form>
            </div>
        </div>

    </div>

@endsection

