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
                    <a href="{{ url('/') }}"><i class="las la-home">Home</i> </a> <i class="las la-chevron-right">Photo Gallery</i>

                </div>
                <section class="section-ten">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="homeGallery owl-carousel owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-4764px, 0px, 0px); transition: all 1s ease 0s; width: 5558px;">

                                            @php
                                                $photo_gallery1 = App\Models\PhotoGallery::latest()->get();
                                            @endphp

                                            @foreach ($photo_gallery1 as $item)
                                                <div class="owl-item" style="width: 784px; margin-right: 10px;">
                                                    <div class="item">
                                                        <div class="photo">
                                                            <a class="themeGallery" href="{{ asset($item->photo_gallery) }}">
                                                                <img src="{{ asset($item->photo_gallery) }}" alt="PHOTO"></a>
                                                            <h3 class="photoCaption">
                                                                <a href=" ">{{ $item->post_date }} </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                                class="las la-angle-left"></i></button><button type="button" role="presentation"
                                            class="owl-next disabled"><i class="las la-angle-right"></i></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                                <div class="homeGallery1 owl-carousel owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transition: all 1s ease 0s; width: 2515px; transform: translate3d(-463px, 0px, 0px);">

                                            @php
                                                $photo_gallery = App\Models\PhotoGallery::latest()->get();
                                            @endphp

                                            @foreach ($photo_gallery as $item)
                                                <div class="owl-item " style="width: 122.333px; margin-right: 10px;">
                                                    <div class="item">
                                                        <div class="phtot2">
                                                            <a class="themeGallery" href="{{ asset($item->photo_gallery) }}">
                                                                <img src="{{ asset($item->photo_gallery) }}" alt="PHOTO"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                            class="owl-next"><span aria-label="Next">›</span></button></div>
                                    <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                                            role="button" class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-4">

                                <h2 class="themesBazar_cat01"> <a href=" "> <i class="las la-video"></i> VIDEO GALLERY </a>
                                </h2>

                                <div class="white-bg">

                                    @php
                                        $video_gallery = App\Models\VideoGallery::latest()->get();
                                    @endphp

                                    @foreach ($video_gallery as $video)
                                        <div class="secFive-smallItem">
                                            <div class="secFive-smallImg">
                                                <img src="{{ asset($video->video_image) }}">
                                                <a href="{{ $video->video_url }}" class="home-video-icon popup"><i
                                                        class="las la-video"></i></a>
                                                <h5 class="secFive_title2">
                                                    <a href="{{ $video->video_url }}" class="popup"> {{ $video->video_title }} </a>
                                                </h5>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div> --}}
                        </div>
                    </div>
                </section>
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
