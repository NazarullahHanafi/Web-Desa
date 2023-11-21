<!DOCTYPE html>

@php
    $seo = App\Models\SeoSetting::find(1);
@endphp

<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.gif') }}" type="image/x-icon">
    <meta name="title" content="{{ $seo->meta_title }}">
    <meta name="author" content="{{ $seo->meta_author }}">

    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <meta name="description" content="{{ $seo->meta_description }}">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('index/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('batik/style.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('index/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/headstyle.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">




    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('frontend/assets/css/style.min.css') }}"
        media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('frontend/assets/css/styles.css') }}" media="all">
    <link rel="stylesheet" id="newsflash-style-css" href="{{ asset('frontend/assets/css/style.css') }}" media="all">
    <link rel="stylesheet" id="common-themesbazar-css" href="{{ asset('frontend/assets/css/common-themesbazar.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-lineawesome-css" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-stellarnav-css" href="{{ asset('frontend/assets/css/stellarnav.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-jquery-css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-magnific-css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-carousel-css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-responsive-css" href="{{ asset('frontend/assets/css/responsive.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-bootstrap-css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"
        media="all">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/stylesheet.css') }}"
        media="all">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script charset="utf-8" src="{{ asset('frontend/assets/js/horizon_timeline.08c300ab95020b1109a05214ccb84dea.js') }}">
    </script>
</head>

<body class="home blog" oncontextmenu="return true" data-new-gr-c-s-check-loaded="14.1078.0" data-gr-ext-installed="">

    <div class="main_website">

        @include('frontend.body.header')
        @include('frontend.body.breaking_news')

        <div class="main-section" style="overflow: hidden;">

            @yield('home')


            @include('frontend.body.footer')

        </div>
        <script src="{{ asset('frontend/assets/regenerator-runtime.min.js') }}" id="regenerator-runtime-js"></script>
        <script src="{{ asset('frontend/assets/wp-polyfill.min.js') }}" id="wp-polyfill-js"></script>


        <script src="{{ asset('frontend/assets/js/index.js') }}" id="contact-form-7-js"></script>
        <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}" id="newsflash-jquery-js"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" id="newsflash-bootstrap-js"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}" id="newsflash-bootstrapbundle-js"></script>
        <script src="{{ asset('frontend/assets/js/stellarnav.min.js') }}" id="newsflash-stellarnav-js"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}" id="newsflash-carousel-js"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}" id="newsflash-magnific-js"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}" id="newsflash-jqueryui-js"></script>
        <script src="{{ asset('frontend/assets/js/lazyload.min.js') }}" id="newsflash-lazyload-js"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}" id="newsflash-main-js"></script>
        <script src="{{ asset('index/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('index/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('index/assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('index/assets/js/owl-carousel.js') }}"></script>

        <script src="{{ asset('index/assets/js/tabs.js') }}"></script>
        <script src="{{ asset('batik/script.js') }}"></script>
        <script src="{{ asset('index/assets/js/swiper.js') }}"></script>
        <script src="{{ asset('index/assets/js/custom.js') }}"></script>

        <script src="https://kit.fontawesome.com/97ff43f8ef.js" crossorigin="anonymous"></script>

        <script>
            var interleaveOffset = 0.5;

          var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev"
            },
            on: {
              progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                  var slideProgress = swiper.slides[i].progress;
                  var innerOffset = swiper.width * interleaveOffset;
                  var innerTranslate = slideProgress * innerOffset;
                  swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
                }
              },
              touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                  swiper.slides[i].style.transition = "";
                }
              },
              setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                  swiper.slides[i].style.transition = speed + "ms";
                  swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
                }
              }
            }
          };

          var swiper = new Swiper(".swiper-container", swiperOptions);
        </script>

        <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>

</html>
