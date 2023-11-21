<header id="header" class="navbar-fixed-top header" role="banner">
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-bg">
                    <a href="{{ url('/') }}">
                        <img style="width: 100px" height="200px" class="img-responsive" src="{{ asset('batik/images/batikk.png') }}" alt="logo">
                    </a>
                </div>
            </div><!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="{{ url('/') }} " aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                Profil Desa</a>
                    </li>
                    <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="{{ route('indexbatik') }} " aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                HOME</a>
                    </li>
                    <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="{{ route('aboutbatik') }} " aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                About</a>
                    </li>
                    {{-- <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="" aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                Portfolio</a>
                    </li> --}}
                    <li id="menu-item-89"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                            <a href="{{ route('workshop') }}" aria-current="page"> <i class="fa-solid fa-house-user"></i>
                                Workshop</a>
                    </li>
                    {{-- <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                           <div class="dropdown-menu">
                            <ul>
                                   <li><a href="{{ url('/') }}">Our Team</a></li>
                                   <li><a href="about2.html">About Us - 2</a></li>
                                   <li><a href="service2.html">Services - 2</a></li>
                                   <li><a href="service-single.html">Services Single</a></li>
                                   <li><a href="pricing.html">Pricing Table</a></li>
                                   <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                           <div class="dropdown-menu">
                            <ul>
                                    <li><a href="blog-rightside.html">Blog with Sidebar</a></li>
                                <li><a href="blog-item.html">Blog Single</a></li>
                            </ul>
                        </div>
                    </li> --}}
                    {{-- <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                           <div class="dropdown-menu">
                            <ul>
                                    <li><a href="typography.html">Typography</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </div>
                    </li> --}}
                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                </ul>
            </nav><!--/ Navigation end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</header><!--/ Header end -->
<section id="home" class="no-padding">
    <div id="main-slide" class="cd-hero">
        <ul class="cd-hero-slider">
            <li class="selected">
                <div class="overlay2">
                    <img style="height: 700px" class="img-responsive" src="{{ asset('batik/images/bannerbatik.jpg') }}" alt="slider">
                </div>
                <div class="cd-half-width">
                    <h2>Batik Irma</h2>
                    <p>Kab Pelalawan Kec Pelalawan Desa Lalang Kabung</p>

                </div> <!-- .cd-half-width -->
                {{-- <div class="cd-full-width">
                    <h2>Need To Invent The Future!</h2>
                    <h3>We Making Difference To Great Things Possible</h3>
                    <a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
                    <a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
                </div> <!-- .cd-full-width --> --}}
            </li>
            <li>
                <div class="overlay2">
                    <img class="" src="{{ asset('batik/images/batik1.jpg') }}" alt="slider">
                </div>
                <div class="cd-half-width">
                    <h2>Batik Irma</h2>
                    <p>Kab Pelalawan Kec Pelalawan Desa Lalang Kabung</p>

                </div> <!-- .cd-half-width -->

                {{-- <div class="cd-half-width cd-img-container">
                    <img src="{{ asset('batik/images/slider/bg-thumb1.png') }}" alt="">
                </div> <!-- .cd-half-width.cd-img-container --> --}}
            </li>
            <li>
                <div class="overlay2">
                    <img class="" src="{{ asset('batik/images/batik2.jpg') }}" alt="slider">
                </div>
                <div class="cd-half-width">
                    <h2>Batik Irma</h2>
                    <p>Kab Pelalawan Kec Pelalawan Desa Lalang Kabung</p>

                </div> <!-- .cd-half-width -->
                {{-- <div class="cd-half-width cd-img-container img-right">
                    <img src="{{ asset('batik/images/slider/bg-thumb2.png') }}" alt="">
                </div> <!-- .cd-half-width.cd-img-container --> --}}
                {{-- <div class="cd-half-width">
                    <h2>Your Challenge is Our Progress</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                    <a href="#0" class="cd-btn btn btn-primary white">Start</a>
                    <a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
                </div> <!-- .cd-half-width --> --}}
            </li>
        </ul> <!--/ cd-hero-slider -->

    <div class="cd-slider-nav">
        <nav>
            <span class="cd-marker item-1"></span>
            <ul>
                <li class="selected"><a href="#0"><i class="fa-solid fa-cash-register"></i> Invent</a></li>
                <li><a href="#0"><i class="fa-solid fa-shirt"></i> Dream</a></li>
                <li><a href="#0"><i class="fa-solid fa-tree"></i> Tech</a></li>
            </ul>
        </nav>
    </div> <!-- .cd-slider-nav -->

    </div><!--/ Main slider end -->
</section> <!--/ Slider end -->
