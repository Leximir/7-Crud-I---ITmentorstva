@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")
    <div class="container mt-5 mb-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>

                @foreach($allProducts as $product)
                    <tr>
                        <th scope="row">{{ $product['id'] }}</th>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['description'] }}</td>
                        <td>{{ $product['amount'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>{{ $product['image'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
