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
                    <a href="{{ url('/n') }}"><i class="las la-home"></i>Home</a> <i class="las la-chevron-right">Jumlah Penduduk</i>

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
