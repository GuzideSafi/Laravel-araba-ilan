@extends('layouts.home')

@section('title', 'Referanslarımız')
@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Referanslarımız</h1>

                <br>

                <p class="lead">{!! $setting->references !!}</p>
            </div>
        </div>
    </section>
@endsection
