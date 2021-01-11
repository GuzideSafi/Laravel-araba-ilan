@extends('layouts.home')

@section('title', 'Araba İlanı Sitesi')

@section('description')
    Araba İlanı Sitesi
@endsection

@section('keywords','car, araba, ilan')
@include('home._slider')

@section('content')
    <main>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>En Son İlanlar</h2>
                        </div>
                    </div>
                    @foreach($last as $rs)
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/blog-1-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/blog-2-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/blog-3-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="testimonial">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Testimonials <small>from around the world</small></h2>
                        </div>

                        <div class="owl-carousel owl-theme owl-client">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Jackson</h4>
                                        <span>Shopify Developer</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Camila</h4>
                                        <span>Marketing Manager</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Barbie</h4>
                                        <span>Art Director</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Andrio</h4>
                                        <span>Web Developer</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                            <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                            <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="{{asset('assets')}}/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

