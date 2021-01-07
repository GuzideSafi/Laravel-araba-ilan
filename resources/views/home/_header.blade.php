<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">Car Dealer Website</a>
        </div>
    @php
        $parentCategories=\App\Http\Controllers\HomeController::categoryList();
    @endphp
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="cars.html">FAQ</a></li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Araba İlanları <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        @foreach($parentCategories as $rs)
                            <li><a href="blog-posts.html">{{$rs->title}}</a></li>
                        @endforeach


                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>

                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="#">Profilim</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                 </li>
                @endauth

                @guest
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giriş<span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</section>
