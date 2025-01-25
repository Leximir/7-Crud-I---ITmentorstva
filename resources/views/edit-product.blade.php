@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")
    <div class="container mt-5 mb-5">

        <h2 class="mb-4">{{ $pageTitle }}</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
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
                        <td>
                            <a class="btn btn-danger" href="{{ route('BrisanjeProizvoda' , ['product' => $product['id']]) }}">Obrisi</a>
                            <a class="btn btn-primary" href="">Edituj</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
