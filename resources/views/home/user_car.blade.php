@extends('layouts.home')

@section('title', 'User Car List')
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
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Araba İlanları</h4>
                                <p class="card-category"> Araba İlanları Tablosu</p>
                                <a href="{{route('user_car_create')}}" style="position: absolute; right: 30px;font-style: bold; background-color:#4a5568; border-color: #95999c">Araba İlanı Ekle</a><br>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>Image Gallery</th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Brand
                                        </th>
                                        <th>
                                            Color
                                        </th>
                                        <th>
                                            Year
                                        </th>
                                        <th>
                                            Kilometer
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Edit
                                        </th>
                                        <th>
                                            Delete
                                        </th>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td>
                                                    {{$rs->id}}
                                                </td>
                                                <td>
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                                </td>
                                                <td>
                                                    {{$rs->title}}
                                                </td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="60" width="120" alt=""/>
                                                    @endif
                                                </td>
                                                <td><a href="{{route('user_image_add',['car_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/gallery.png" height="30"></a></td>
                                                <td>
                                                    {{$rs->price}} BİN ₺
                                                </td>
                                                <td>
                                                    {{$rs->brand}}
                                                </td>
                                                <td>
                                                    {{$rs->renk}}
                                                </td>
                                                <td>
                                                    {{$rs->yil}}
                                                </td>
                                                <td>
                                                    {{$rs->kilometre}}
                                                </td>
                                                <td>
                                                    {{$rs->status}}
                                                </td>
                                                <td>
                                                    <a href="{{route('user_car_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                                </td>
                                                <td>
                                                    <a href="{{route('user_car_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

