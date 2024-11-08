@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <form action="" class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="mb-4">Get in touch with us</h2>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleFormControlInput2">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-primary mb-5">Send</button>
        </div>

        <!-- Centrirana mapa -->
        <div class="row justify-content-center">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11330.88288441779!2d17.18644778190919!3d44.766110130940156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475e03180c09d68d%3A0x62337bdf5d5ca7fa!2sTvr%C4%91ava%20Kastel!5e0!3m2!1sbs!2sba!4v1731004650355!5m2!1sbs!2sba" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </form>




@endsection
