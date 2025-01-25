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
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($allContacts as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('BrisanjeKontakta' , ['contact' => $contact->id]) }}">Obrisi</a>
                        <a class="btn btn-primary" href="">Edituj</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
