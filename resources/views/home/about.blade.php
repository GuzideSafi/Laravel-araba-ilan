@extends('layouts.home')

@section('title', 'Hakkımızda')
@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Hakkımızda</h1>

                <br>

                <p class="lead">{!! $setting->aboutus !!}</p>
            </div>
        </div>
    </section>
@endsection

