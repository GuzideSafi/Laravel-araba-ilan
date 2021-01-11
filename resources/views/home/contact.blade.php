@extends('layouts.home')

@section('title', 'İletişim')
@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Bize Ulaşın!</h1>

                <br>

                <p class="lead">{!! $setting->contact !!}</p>
            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    @include('home.message')
                    <form action="{{route('sendmessage')}}" method="post" id="contact-form" role="form">
                        @csrf
                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>

                            <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" required>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
                            <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" required>

                            <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="{{asset('assets')}}/images/contact-1-600x400.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
