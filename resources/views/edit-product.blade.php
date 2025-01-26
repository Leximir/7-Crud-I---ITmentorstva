@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")
    <div class="container mt-5 mb-5">

        <h2 class="mb-4">{{ $pageTitle }}</h2>

        <form action="{{ route('SnimanjeEditovanogProizvoda' , ['product' => $product->id]) }}" method="POST">

            {{ csrf_field() }}

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

                        <tr>
                            <th scope="row">{{ $product['id'] }}</th>
                            <td><input name="name" value="{{ $product['name'] }}" type="text"></td>
                            <td><input name="description" value="{{ $product['description'] }}" type="text"></td>
                            <td><input name="amount" value="{{ $product['amount'] }}" type="text"></td>
                            <td><input name="price" value="{{ $product['price'] }}" type="text"></td>
                            <td><input name="image" value="{{ $product['image'] }}" type="text"></td>
                        </tr>

                </tbody>
            </table>

            <button class="btn btn-primary">Sacuvaj izmjene</button>
        </form>
    </div>
@endsection
