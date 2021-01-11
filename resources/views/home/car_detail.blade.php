@extends('layouts.home')

@section('title', 'İlan Detayı')

@section('content')

 <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div>
                    <img src="{{ asset("storage/$data->image") }}" alt="" class="img-responsive wc-image">
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-4 col-xs-6">
                        @foreach($datalist as $rs)
                        <div>
                            <img src="{{ Storage::url($rs->image) }}" alt="" class="img-responsive">
                        </div>
                        @endforeach

                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <form action="#" method="post" class="form">
                    <h2>{{$data->title}}</h2>

                    <p class="lead">{{$data->description}}</p>

                    <p class="lead"><strong class="text-primary">{{$data->price}}.000₺</strong></p>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Adres</span>

                                <br>

                                <strong>{{$data->address}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Marka</span>

                                <br>

                                <strong>{{$data->brand}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span> Model</span>

                                <br>

                                <strong>{{$data->model}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Seri</span>

                                <br>

                                <strong>{{$data->series}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Kilometre</span>

                                <br>

                                <strong>{{$data->kilometre}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Yakıt Tipi</span>

                                <br>

                                <strong>{{$data->yakittipi}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Motor Hacmi</span>

                                <br>

                                <strong>{{$data->motorhacmi}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Motor Gücü</span>

                                <br>

                                <strong>{{$data->motorgucu}}</strong>
                            </p>
                        </div>


                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Vites Tipi</span>

                                <br>

                                <strong>{{$data->vitestipi}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Yıl</span>

                                <br>

                                <strong>{{$data->yil}}</strong>
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <p>
                                <span>Renk</span>

                                <br>

                                <strong>{{$data->renk}}</strong>
                            </p>
                        </div>


                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Araç Bilgileri</h4>
                    </div>

                    <div class="panel-body">
                        <p>{!! $data->detail !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>İletişim Detayları</h4>
                    </div>

                    <div class="panel-body">
                        <p>
                            <span>Ad Soyad</span>

                            <br>

                            <strong>{{Auth::user()->name}}</strong>
                        </p>

                        <p>
                            <span>Phone</span>

                            <br>

                            <strong>{{Auth::user()->phone}}</strong>
                        </p>



                        <p>
                            <span>Email</span>

                            <br>

                            <strong><a href="mailto:{{Auth::user()->name}}">{{Auth::user()->email}}</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>



@endsection
