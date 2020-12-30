<!-- resources/views/child.blade.php -->

@extends('layouts.car')

@section('title', 'Laravel Araba İlan Sitesi')
@section('description')
    Türkiyenin araç alım-satım platformu...
@endsection
@section('keywords','Araç, Alım, Satım, 2.el, İkinciel')

@include('home._slider')

@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>Car Listing</h1>

                <br>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
            </div>
        </div>
    </section>

    <section class="section-background">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="form">
                        <form action="#">
                            <div class="form-group">
                                <label>Used/New:</label>

                                <select class="form-control">
                                    <option value="">All</option>
                                    <option value="new">New vehicle</option>
                                    <option value="used">Used vehicle</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vehicle Type:</label>

                                <select class="form-control">
                                    <option value="">--All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Make:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Model:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Price:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Mileage:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Engine size:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Power:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Fuel:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Gearbox:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Doors:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Number of seats:</label>

                                <select class="form-control">
                                    <option value="">-- All --</option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                    <option value="">option 3</option>
                                    <option value="">option 4</option>
                                </select>
                            </div>

                            <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; New vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-5-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; New vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="courses-thumb courses-thumb-secondary">
                                <div class="courses-top">
                                    <div class="courses-image">
                                        <img src="images/product-6-720x480.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="courses-date">
                                        <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                        <span title="Author"><i class="fa fa-cube"></i> 1800cc</span>
                                        <span title="Views"><i class="fa fa-cog"></i> Manual</span>
                                    </div>
                                </div>

                                <div class="courses-detail">
                                    <h3><a href="car-details.html">Lorem ipsum dolor sit amet</a></h3>

                                    <p class="lead"><small><del> $11199.00</del></small> <strong>$11179.00</strong></p>

                                    <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; New vehicle</p>
                                </div>

                                <div class="courses-info">
                                    <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
