@extends('layouts.admin')

@section('title','Araba İlanı Düzenle')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Araba Ekle</h4>
                            <p class="card-category"> Araba Ekleme Sayfası</p>
                        </div>
                        <div class="card-body">
                            <div style="width:200px; height: 850px;">
                                <form action="{{route('admin_car_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <table>

                                        <tr><h4>Category:</h4> <select name="category_id" id="category_id" style="width: 600px">
                                                <option value="0" selected="selected">Ana Kategori</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id==$data->Category_id) selected="selected" @endif>{{$rs->title}}</option>
                                                @endforeach


                                            </select></tr>
                                        <tr><h4>Title:</h4> <input style="width: 600px" id="title" value="{{$data->title}}" type="text" name="title" placeholder="Title"/></tr>
                                        <tr><h4>Keywords: </h4><input style="width: 600px" id="keywords" value="{{$data->keywords}}" type="text" name="keywords" placeholder="Keywords"/></tr>
                                        <tr><h4>Description: </h4><input style="width: 600px" id="description" value="{{$data->description}}" type="text" name="description" placeholder="Description"/></tr>
                                        <tr><h4>Address: </h4><input style="width: 600px" id="address" value="{{$data->address}}" type="text" name="address" placeholder="Address"/></tr>
                                        <tr><h4>Marka: </h4><input style="width: 600px" id="brand" value="{{$data->brand}}" type="text" name="brand" placeholder="Marka"/></tr>
                                        <tr><h4>Seri: </h4><input style="width: 600px" id="series" value="{{$data->series}}" type="text" name="series" placeholder="Seri"/></tr>
                                        <tr><h4>Model: </h4><input style="width: 600px" id="model" value="{{$data->model}}" type="text" name="model" placeholder="Model"/></tr>
                                        <tr><h4>Sene: </h4><input style="width: 600px" id="yil" value="{{$data->yil}}" type="number" name="yil" placeholder="Yıl"/></tr>
                                        <tr><h4>Yakıt Tipi: </h4><input style="width: 600px" id="yakittipi" value="{{$data->yakittipi}}" type="text" name="yakittipi" placeholder="Yakıt Tipi"/></tr>
                                        <tr><h4>Vites Tipi: </h4><input style="width: 600px" id="vitestipi" value="{{$data->vitestipi}}" type="text" name="vitestipi" placeholder="Vites Tipi"/></tr>
                                        <tr><h4>Motor Hacmi: </h4><input style="width: 600px" id="motorhacmi" value="{{$data->motorhacmi}}" type="text" name="motorhacmi" placeholder="Motor Hacmi"/></tr>
                                        <tr><h4>Motor Gücü: </h4><input style="width: 600px" id="motorgucu" value="{{$data->motorgucu}}" type="text" name="motorgucu" placeholder="Motor Gücü"/></tr>
                                        <tr><h4>Kilometre: </h4><input style="width: 600px" id="kilometre" value="{{$data->kilometre}}" type="number" name="kilometre" placeholder="Kilometre"/></tr>
                                        <tr><h4>Renk: </h4><input style="width: 600px" id="renk" value="{{$data->renk}}" type="text" name="renk" placeholder="Renk"/></tr>
                                        <tr><h4>Detail: </h4><input style="width: 600px" id="detail" value="{{$data->detail}}" type="text" name="detail" placeholder="Detail"/></tr>
                                        <tr><h4>Slug: </h4><input style="width: 600px" id="slug" value="{{$data->slug}}" type="text" name="slug" placeholder="Slug"/></tr><br>
                                        <tr><label for="image"><h4>Image:</h4></label><input type="file" name="image" id="image" value="{{$data->image}}" class="form-control">
                                            <br>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="100" alt=""/>
                                            @endif <br>
                                        <tr><h4>Price: </h4><input style="width: 600px" id="price" value="{{$data->price}}" type="number" name="price" placeholder="Price"/></tr>
                                        <tr><label for="status"><h4>Status:</h4></label>

                                            <select name="status" id="status" style="width: 600px">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option value="true">True</option>
                                                <option value="false">False</option>

                                            </select></tr><br><br>
                                        <tr><button type="submit" style="color:#95999c; background-color: #4a5568; width: 150px;">Araba İlanı Düzenle</button></tr>
                                    </table>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection
