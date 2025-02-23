@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <form action="{{ route('products.save') }}" method="POST" class="container">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>Error: {{ $error }}</p>
            @endforeach
        @endif

        {{ csrf_field() }}
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="mb-4">Add a new Product</h2>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" value="{{ old('name') }}" id="exampleFormControlInput1" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Description</label>
                <input name="description" type="text" class="form-control" value="{{ old('description') }}" id="exampleFormControlInput2"></input>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Amount</label>
                <input name="amount" type="number" class="form-control" value="{{ old('amount') }}" id="exampleFormControlInput1" placeholder="Amount">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input name="price" type="number" class="form-control" value="{{ old('price') }}" id="exampleFormControlInput1" placeholder="Price">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input name="image" type="text" class="form-control" value="{{ old('image') }}" id="exampleFormControlInput1" placeholder="Image">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Add</button>
        </div>
    </form>

@endsection
