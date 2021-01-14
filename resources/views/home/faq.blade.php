@extends('layouts.home')

@section('title', 'Hakkımızda')
@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>FAQ</h1>

                <br>

                @foreach($datalist as $rs)
                    <h2>{{$rs->question}}</h2>
                    {!! $rs->answer !!}
                    <hr>
                @endforeach
            </div>
        </div>
    </section>
@endsection
