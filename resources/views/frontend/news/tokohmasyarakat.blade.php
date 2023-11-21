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
                    <a href="{{ url('/') }}"><i class="las la-home"></i>Home</a> <i class="las la-chevron-right">Tokoh Masyarakat</i>
                    <br><br>
                    <div class="col-lg-12 col-md-12">
                        <img src="{{ asset('namatokoh.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Badan Permusyawaratan Desa (BPD)</h5>
                              <p class="card-text">BPD bertugas untuk mengawasi pelaksanaan program dan kebijakan pemerintah desa</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Lembaga Ketahanan Masyarakat Desa (LKMD)</h5>
                              <p class="card-text">Lembaga Ketahanan Masyarakat Desa (LKMD) memiliki peran yang penting dalam membangun dan memajukan desa serta menguatkan ikatan sosial dan budaya masyarakat</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Pemberdayaan dan Kesejahteraan Keluarga (PKK)</h5>
                              <p class="card-text">PKK untuk desa bertujuan untuk meningkatkan kualitas hidup keluarga dan masyarakat secara keseluruhan melalui program-program pemberdayaan dan penyuluhan yang berfokus pada aspek-aspek yang vital dalam kehidupan sehari-hari</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Masyarakat Peduli Api (MPA)</h5>
                              <p class="card-text">Tugas-tugas MPA merupakan bagian penting dalam menjaga keberlanjutan lingkungan dan mencegah bencana kebakaran. Dengan peran aktif mereka, MPA membantu dalam mengurangi risiko kebakaran hutan dan lahan serta melindungi ekosistem dan komunitas sekitar</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Pelindung Masyarakat (LINMAS)</h5>
                              <p class="card-text">Tugas-tugas Linmas desa sangat beragam, namun intinya adalah menjaga keamanan, ketertiban, dan kesejahteraan masyarakat setempat. Peran Linmas sangat penting dalam menciptakan lingkungan yang aman, nyaman, dan harmonis bagi seluruh warga desa</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="{{ asset('blank.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Karang Taruna</h5>
                              <p class="card-text">Tugas-tugas Karang Taruna desa memiliki dampak yang signifikan dalam membentuk pemuda yang berkualitas, aktif, dan berkontribusi pada pembangunan desa secara keseluruhan. Melalui berbagai program dan kegiatan, Karang Taruna berperan dalam membentuk generasi muda yang tangguh dan berdaya saing</p>
                            </div>
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
