<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            @foreach($slider->take(4) as $rs)
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>{{$rs->title}}</h1>
                            <h3>{{$rs->yil}}</h3>
                            <h2>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}<br>
                                {{$rs->price}}.000 ₺</h2>
                            <a href="{{route('car',['id' => $rs->id,'slug' => $rs->slug])}}" class="section-btn btn btn-default">İlanı İncele</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
