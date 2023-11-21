@extends('frontend.home_dashboard')
@section('home')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="archive-topAdd">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="rachive-info-cats">
                    <a href="{{ url('/') }}"><i class="las la-home"></i>Home</a> <i
                        class="las la-chevron-right">Lokasi Geografis Desa</i>
                        <div class="map-area mb-5" style="width:100%; background: #eff3f4; padding: 20px;">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=kantor desa lalang kabung&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                        href="https://connectionsgame.org/">Connections Game</a></div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        width: 100%;
                                        height: 400px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        width: 100%;
                                        height: 400px;
                                    }

                                    .gmap_iframe {
                                        height: 400px !important;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="container">
                            <div class="content">
                                <div class="text-content">
                                    <h1>Lokasi Desa</h1>
                                    <p>
                                        Selamat datang di halaman peta lokasi Desa Lalang Kabung! Pada
                                        halaman ini, Anda akan menemukan peta yang menunjukkan lokasi Desa
                                        Lalang kabung beserta informasi terkait wilayah ini. Desa
                                        Lalang kabung adalah sebuah desa yang terletak di wilayah
                                        Kabupaten Pelalawan Kecamatan Pelalawan dan Provinsi Riau, Indonesia.
                                        Alamat kantor desa berada di Jalan Datuk Lintang No.3
                                    </p>

                                    <h4>Peta Lokasi:</h4>
                                    <p>
                                        Peta yang kami sediakan akan memberikan gambaran detail mengenai
                                        letak geografis Desa Lalang kabung. Anda dapat melihat titik
                                        koordinat dan batas wilayah desa, sehingga memudahkan Anda dalam
                                        merencanakan perjalanan dan mengetahui titik-titik penting yang ada
                                        di desa ini. Informasi Penting: Kami juga menyediakan informasi
                                        penting tentang fasilitas dan sarana umum yang ada di Desa Lalang Kabung. Anda dapat menemukan lokasi tempat ibadah, sekolah, fasilitas
                                        kesehatan, dan tempat-tempat menarik lainnya yang layak dikunjungi.
                                        Kunjungi Desa Lalang kabung dan nikmati keindahan alamnya yang
                                        menawan, serta rasakan hangatnya keramahan penduduk setempat.
                                        Selamat menjelajahi halaman peta lokasi Desa Lalang kabung dan
                                        semoga informasi yang kami sajikan membantu Anda dalam merencanakan
                                        perjalanan dan mengeksplorasi kekayaan desa kami.
                                    </p>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="row">




                    <div class="col-md-4 col-sm-4">
                        <div class="row">



                        </div>
                    </div>
                </div>



                <div class="row">






                </div>
                {{-- <div class="archive1-margin">
                    <div class="archive-content">
                        <div class="row">
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="row">
                    <div class="col-md-12">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href=" ">2</a>
                        <a class="next page-numbers" href=" ">Next »</a>
                    </div>
                </div> --}}

                <br><br>

                {{-- <div class="row">
                    <div class="col-lg-12 col-md-12"></div>
                </div> --}}
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sitebar-fixd" style="position: sticky; top: 0;">
                    <div class="archivePopular">
                        <ul class="nav nav-pills" id="archivePopular-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent"
                                    role="tab" aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular"
                                    role="tab" aria-controls="archivePopulars" aria-selected="false"> POPULAR </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContentarchive">
                        <div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel"
                            aria-labelledby="archiveRecent">

                            <div class="archiveTab-sibearNews">


                                @foreach ($newnewspost as $key => $newsitem)
                                    <div class="archive-tabWrpp archiveTab-border">
                                        <div class="archiveTab-image ">
                                            <a
                                                href="{{ url('news/details/' . $newsitem->id . '/' . $newsitem->news_title_slug) }}"><img
                                                    class="lazyload" src="{{ asset($newsitem->image) }}"></a>
                                        </div>
                                        <a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
                                        <h4 class="archiveTab_hadding"><a
                                                href="{{ url('news/details/' . $newsitem->id . '/' . $newsitem->news_title_slug) }}">{{ $newsitem->news_title }}
                                            </a>
                                        </h4>
                                        <div class="archive-conut">
                                            {{ $key + 1 }}
                                        </div>

                                    </div>
                                @endforeach




                            </div>
                        </div>
                        <div class="tab-pane fade" id="archiveTab_popular" role="tabpanel"
                            aria-labelledby="archivePopulars">
                            <div class="archiveTab-sibearNews">


                                @foreach ($newspopular as $key => $newsitem)
                                    <div class="archive-tabWrpp archiveTab-border">
                                        <div class="archiveTab-image ">
                                            <a
                                                href="{{ url('news/details/' . $newsitem->id . '/' . $newsitem->news_title_slug) }}"><img
                                                    class="lazyload" src="{{ asset($newsitem->image) }}"></a>
                                        </div>
                                        <a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
                                        <h4 class="archiveTab_hadding"><a
                                                href="{{ url('news/details/' . $newsitem->id . '/' . $newsitem->news_title_slug) }}">{{ $newsitem->news_title }}
                                            </a>
                                        </h4>
                                        <div class="archive-conut">
                                            {{ $key + 1 }}
                                        </div>

                                    </div>
                                @endforeach




                            </div>
                        </div>
                    </div>
                    <div class="siteber-add2">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
