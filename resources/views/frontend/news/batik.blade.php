<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>Batik Irma</title>
    <meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('batik/css/bootstrap.min.css') }}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('batik/css/style.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('batik/css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('batik/css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('batik/css/animate.css') }}">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{ asset('batik/css/prettyPhoto.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('batik/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('batik/css/owl.theme.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('batik/css/flexslider.css') }}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{ asset('batik/css/cd-hero.css') }}">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{ asset('batik/css/presets/preset3.css') }}" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

	<!-- Header start -->
	@include('frontend.news.headerbatik')

    @yield('home')


	<!-- Footer start -->
	<footer id="footer" class="footer img-fluid">
		<div class="container">
			<div class="row d-block mx-auto">

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Flickr Photos</h3>

					<div class="img-gallery">
						<div class="img-container">
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
								<img src="{{ asset('batik/images/batik1.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
								<img src="{{ asset('batik/images/batik3.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
								<img src="{{ asset('batik/images/batik4.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
								<img src="{{ asset('batik/images/batik5.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
								<img src="{{ asset('batik/images/batik6.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="{{ asset('batik/images/batik7.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="{{ asset('batik/images/batik8.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="{{ asset('batik/images/batik9.jpg') }}" alt="">
							</a>
							<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
								<img src="{{ asset('batik/images/batik2.jpg') }}" alt="">
							</a>
						</div>
					</div>
				</div><!--/ end flickr -->

				<div class="col-md-3 col-sm-12 footer-widget footer-about-us">
					<h3 class="widget-title">About Irma</h3>
					<p> </p>
					<h4>Alamat</h4>
					<p>JL. M. Toha RT 04 RW 02 No.34</p>
					<div class="row">
						<div class="col-md-6">
							<h4>Email:</h4>
							<p>mutimahsitim87@gmail.com</p>
						</div>
						<div class="col-md-6">
							<h4>WA</h4>
							<p>+6282283142248</p>
						</div>
					</div>
                    {{-- <form action="#" role="form">
                        <div class="input-group subscribe">
                            <input type="email" class="form-control" placeholder="Email Address" required="">
                            <span class="input-group-addon">
                              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                            </span>
                        </div>
                    </form> --}}
				</div><!--/ end about us -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-social unstyled">
						<li>
							<a title="Twitter" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="linkedin" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Pinterest" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
							</a>
							<a title="Dribble" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
							</a>
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2023 KKN UIN SUSKA 2023. <span>Designed by <a href="https://www.instagram.com/kknlalangkabung2023/">KKN UIN SUSKA 2023</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Copyright end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ asset('batik/js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{ asset('batik/js/bootstrap.min.js') }}"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="{{ asset('batik/js/style-switcher.js') }}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{ asset('batik/js/owl.carousel.js') }}"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="{{ asset('batik/js/jquery.prettyPhoto.js') }}"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="{{ asset('batik/js/jquery.flexslider.js') }}"></script>
	<!-- CD Hero slider -->
	<script type="text/javascript" src="{{ asset('batik/js/cd-hero.js') }}"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="{{ asset('batik/js/isotope.js') }}"></script>
	<script type="text/javascript" src="{{ asset('batik/js/ini.isotope.js') }}"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="{{ asset('batik/js/wow.min.js') }}"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="{{ asset('batik/js/smoothscroll.js') }}"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="{{ asset('batik/js/jquery.easing.1.3.js') }}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('batik/js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('batik/js/waypoints.min.js') }}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('batik/js/custom.js') }}"></script>
	</div><!-- Body inner end -->
</body>
</html>
