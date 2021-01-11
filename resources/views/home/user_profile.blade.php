@extends('layouts.home')

@section('title', 'User Profile')
@include('home._header')


@section('content')
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Kullanıcı Bilgileri</h1>

                <br>

                <p class="lead">{{Auth::user()->name}}</p>
            </div>
        </div>
    </section>

    <section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="{{route('myprofile')}}">Profilim</a></li>

                        <li><a href="#hakkımızda">Mesajlarım</a></li>

                        <li><a href="#Ders">İlanlarım</a></li>

                        <li><a href="{{route('logout')}}">Çıkış</a></li>

                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-info">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

