@extends('layouts.home')

@section('title', 'Sonuçlar')
@include('home._header')
@section('content')
    <br><br><br><br>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>{{$search}}</h2>
                    </div>
                </div>
                @foreach($datalist as $rs)
                    <div class="col-md-4 col-sm-4">

                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{ asset("storage/$rs->image") }}" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-dashboard"></i> {{$rs->kilometre}}km</span>
                                    <span title="Author"><i class="fa fa-cube"></i> {{$rs->motorhacmi}}cc</span>
                                    <span title="Views"><i class="fa fa-cog"></i> {{$rs->vitestipi}}</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="{{route('car',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h3>

                                <p class="lead"><small><del>{{$rs->price}}.000 ₺</del></small> <strong>{{$rs->price}}.000 ₺</strong></p>

                                <p>{{$rs->motorgucu}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->yakittipi}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->yil}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->renk}}</p>
                            </div>

                            <div class="courses-info">
                                <a href="{{route('car',['id' => $rs->id,'slug' => $rs->slug])}}" class="section-btn btn btn-primary btn-block">İlanı İncele</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
