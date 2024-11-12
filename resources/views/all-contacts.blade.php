@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    @foreach($allContacts as $contact)
        {{ $contact->email }}
    @endforeach

@endsection
