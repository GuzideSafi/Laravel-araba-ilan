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
                <style>
                    ul {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        overflow: hidden;
                        background-color: #34495e;
                    }

                    li {
                        display:inline-block;
                    }

                    li a {
                        display: block;
                        color: white;
                        text-align: center;
                        padding: 14px 16px;
                        text-decoration: none;
                    }

                    li a:hover{
                        background-color:#f39c12;
                    }

                    ul li ul {
                        background-color:#2c3e50;
                        display:none;
                        position:absolute;
                        width:100px
                    }

                    ul li:hover ul{
                        display:block;
                    }
                    li ul li {
                        display:block;
                    }
                </style>

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

