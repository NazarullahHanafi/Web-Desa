@extends('frontend.news.batik')
@section('home')
    <section id="aboutt" class="about angle">
        <div class="container">
            <div class="row">
                <div class="landing-tab clearfix">
                    <ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
                        <li class="active">
                            <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-icon"><i class="fa-solid fa-person-dress"></i></i></span>
                                <div class="tab-info">
                                    <h3>Profile</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-icon"><i class="fa-solid fa-school"></i></span>
                                <div class="tab-info">
                                    <h3>Riwayat Pekerjaan</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-icon"><i class="fa-solid fa-map-location"></i></span>
                                <div class="tab-info">
                                    <h3>Lokasi</h3>
                                </div>
                            </a>
                        </li>
                        {{-- <li>
                            <a class="animated fadeIn" href="#tab_d" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-pagelines"></i></span>
                                <div class="tab-info">
                                    <h3>Modern Design</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_e" data-toggle="tab">
                                <span class="tab-icon"><i class="fa fa-support"></i></span>
                                <div class="tab-info">
                                    <h3>Dedicated Support</h3>
                                </div>
                            </a>
                        </li> --}}
                    </ul>
                    <div class="tab-content col-md-9 col-sm-7">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <img src="{{ asset('batik/images/ibu.jpg') }}" class="img-reponsive mb-5" style="height: 300px"
                                alt=""> <br />
                            <h3 class="mt-5">Batik Irma</h3>
                            <p>Batik Irma salah satu perajin batik tradisional di Indonesia yang memiliki latar belakang
                                sebagai akademisi dan praktisi yang handal dan terpercaya serta concern terhadap dokumentasi
                                karya yang lengkap dan detail dimulai dari pengumpulan sketsa/gambar dasar yang lengkap.
                                <br><br>
                                Di balik halaman rumah yang sederhana, terdapat kisah inspiratif yang merajut benang-benang
                                keberanian dan kreativitas. Namanya Irma, seorang perempuan yang memiliki mimpi besar dan
                                tekad kuat untuk merintis dunia batik yang tak hanya memikat mata, tetapi juga menyentuh
                                hati.
                                <br><br>

                                Dari kediamannya yang penuh kasih, Irma memulai perjalanan menakjubkan dengan satu gumpalan
                                kain putih dan impiannya yang membara. Dengan sentuhan tangannya yang penuh cinta, dia
                                merajut motif demi motif menjadi karya indah yang bernama "Irma Batik". Di bawah sinar
                                matahari dan embusan angin, setiap titik dan garis batik menceritakan dedikasi dan
                                dedikasinya yang tak terbatas.

                                <br><br>

                                Meskipun timnya hanya terdiri dari tiga anggota, yang tak lain adalah keluarganya sendiri,
                                Irma telah menjahit lebih dari 10.000 pesanan batik dengan penuh kegigihan. Setiap batik
                                bukan hanya sehelai kain yang indah, tetapi juga kisah perjuangan seorang perempuan yang
                                memilih untuk mewujudkan impian di tengah keterbatasan.

                                <br><br>
                                Irma bukan hanya sekadar menghasilkan batik, dia telah menciptakan lebih dari 10 motif yang
                                unik dan menawan. Motif-motif ini tidak hanya dipamerkan, melainkan juga telah
                                diperjualbelikan di pasar lokal. Setiap motif adalah cerminan keindahan alam, kearifan
                                budaya, dan imajinasi Irma yang tak terbatas.

                                <br><br>
                                Tak hanya mencipta, Irma juga membuka pintu bagi siapa saja yang ingin merasakan keajaiban
                                merajut kain. Kehangatan halaman rumahnya menjadi ruang kelas belajar, di mana warna-warni
                                batik dan tawa riang berkumpul dalam harmoni. Irma mengajarkan lebih dari sekadar teknik,
                                dia mengajarkan bagaimana mewujudkan impian dan membagikan percikan semangat kepada setiap
                                orang yang mengikuti jejaknya.

                                <br><br>
                                Irma dan "Irma Batik" bukan sekadar kisah tentang batik, melainkan kisah tentang tekad,
                                kasih, dan semangat tak pernah padam. Di setiap helai kain yang dihiasi Irma, terpintal
                                pesan bahwa impian, ketika dijalin dengan kerja keras dan keyakinan, bisa menjadi mahakarya
                                yang menginspirasi banyak hati.
                            </p>
                        </div>
                        <div class="tab-pane animated fadeInLeft" id="tab_b">
                            {{-- <i class="fa fa-briefcase big"></i> --}}
                            <h3>Riwayat Pekerjaan</h3>
                            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro,
                                Etsy VHS kitsch actually messenger bag pug. Pbrb semiotics try-hard, Schlitz occupy
                                dreamcatcher master cleanse Marfa Vice tofu. </p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_c">
                            {{-- <i class="fa fa-android big"></i> --}}
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe
                                        src="https://maps.google.com/maps?q=lalang%20kabung&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                        id="gmap_canvas" frameborder="0" scrolling="no"
                                        style="width: 600px; height: 400px;"></iframe>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 400px;
                                            width: 600px;
                                        }
                                    </style>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 400px;
                                            width: 600px;
                                        }
                                    </style><a href="https://www.eireportingonline.com">ei reporting</a>
                                </div>
                            </div>
                            <h3>Lokasi</h3>
                            <p>Di tengah gemuruh alam dan hamparan keindahan desa, tersembunyi satu tempat yang tak hanya
                                mengejar keindahan, tetapi juga merajut sejarah. Alamat Batik yang terletak di Desa Lalang
                                Kabung, Kabupaten Pelalawan, menjadi jendela magis yang membuka dunia batik melalui sentuhan
                                modernitas dan kehangatan tradisi.

                                <br><br>
                                Berkisah di jalan M. Toha, RT 04 RW 02 No.34, Alamat Batik adalah persembahan dari
                                tangan-tangan ulung yang menghidupkan kain menjadi mahakarya. Seperti rintik hujan yang
                                menari di sungai kecil, setiap titik dan garis batik adalah cerminan dari cinta pada warisan
                                budaya dan dedikasi tanpa batas.
                                <br><br>
                                Di tempat ini, alam dan seni bersatu dalam harmoni, menciptakan motif-motif yang
                                menggambarkan kekayaan alam sekitar. Sungguh indah melihat bagaimana karya-karya ini
                                merefleksikan kehidupan, kearifan, dan kedamaian desa yang tumbuh di bawah langit biru.
                                <br><br>
                                Alamat Batik tak hanya sekadar tempat berkarya, tetapi juga peluang bagi siapapun yang ingin
                                merasakan magi dalam merajut benang-benang warna. Setiap ruang adalah kelas belajar di mana
                                keajaiban kain dirajut bersama-sama, mempersatukan orang-orang dengan semangat yang sama:
                                mencipta dan menginspirasi.
                                <br><br>
                                Menginjakkan kaki di Alamat Batik adalah merasakan denyut desa yang hidup di dalam setiap
                                motif, setiap jahitan. Ini bukan sekadar alamat fisik, melainkan pintu menuju dunia cerita
                                dan keajaiban, tempat di mana seni dan sejarah berdampingan dengan cinta pada budaya.
                            </p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_d">
                            <i class="fa fa-pagelines big"></i>
                            <h3>Clean and Modern Design</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum
                                diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla,
                                eleifend.</p>
                        </div>
                        <div class="tab-pane animated fadeIn" id="tab_e">
                            <i class="fa fa-support big"></i>
                            <h3>24/7 Dedicated Support</h3>
                            <p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray
                                single-origin coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap wayfarers
                                health goth. Helvetica cray church-key hashtag Carles. Four dollar toast meggings seitan,
                                Tonx pork belly VHS Bushwick. Chambray banh mi cornhole. Locavore messenger bag seitan.</p>
                        </div>
                    </div><!-- tab content -->
                </div><!-- Overview tab end -->
            </div>
            <!--/ Content row end -->
        </div><!-- Container end -->
    </section><!-- About end -->
@endsection
