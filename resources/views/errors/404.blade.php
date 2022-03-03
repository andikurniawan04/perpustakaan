<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Whoops! - WKWKWK</title>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('error/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('error/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('error/css/search.css') }}">
    <link rel="stylesheet" href="{{ url('error/css/style.css') }}">

</head>

<body>
    <!-- Start preloader -->
    <div class="preloader">
        <div class="loader fa-spin"></div>
    </div>
    <!-- End preloader -->
    <!-- Start main section -->
    <section class="error-contents">
        <div class="container">
            <div class="row relative animated" data-animation="contentAnim" data-animation-delay="2000">
                <div class="col-md-12">
                    <div class="error-title">Whoops!</div>
                    <div class="error-text">Page not found</div>
                    <div class="image-divider"></div>
                    <div class="error-text space">or</div>
                    <a href="/" class="home-button">Back Home</a>
                </div>
                <!-- End Column -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End main section -->

    <!-- Start search-section -->
    <section class="search-section">
        <div class="container">
            <div class="row">
                <div id="morphsearch" class="morphsearch animated" data-animation="fromTop288"
                    data-animation-delay="2000">
                    <form class="morphsearch-form">
                        <input class="morphsearch-input" type="search" name="" placeholder="Search Something" />
                        <button class="morphsearch-submit disabled" type="submit">Search</button>
                    </form>
                    <!-- End search form -->

                    <!-- Start morphsearch-content -->
                    <div class="morphsearch-content">
                        <div class="col-md-4 link-box">
                            <h2><span class="fa fa-file-archive-o"></span>Products</h2>
                            <ul class="page-links">
                                <li><span class="fa fa-chevron-right"></span><a href="pinjam">Daftar Buku</a></li>
                                <li><span class="fa fa-chevron-right"></span><a href="pinjam">Kategori Buku</a></li>
                                <li><span class="fa fa-chevron-right"></span><a href="pinjam">Koleksi Buku</a></li>
                            </ul>
                        </div>
                        <!-- End  Categories column -->

                        <div class="col-md-4 link-box">
                            <h2><span class="fa fa-file-text-o"></span>Pages</h2>
                            <ul class="page-links">
                                <li><span class="fa fa-chevron-right"></span><a
                                        href="https://kampusgratis.id/">About</a></li>
                                <li><span class="fa fa-chevron-right"></span><a
                                        href="https://github.com/andikurniawan04/perpustakaan">Our works</a></li>
                                <li><span class="fa fa-chevron-right"></span><a href="https://laravel.com/">How
                                        works</a></li>
                            </ul>
                        </div>
                        <!-- End  pages column -->

                        <div class="col-md-4 link-box">
                            <h2><span class="fa fa-file-picture-o"></span>Recent Posts</h2>
                            <ul class="page-links">
                                <li><span class="fa fa-chevron-right"></span><a
                                        href="https://translate.google.co.id/?hl=id&sl=ru&tl=id&text=Brazikowazzzz%20Sinyommmm%20Ikki%20Paidiedee%20URRRRAAAAAAA&op=translate">Brazikowazzzz
                                        Sinyommmm
                                        Ikkipaidiedee URRRRAAAAAAA</a></li>
                            </ul>
                        </div>
                        <!-- End  Recent Posts column -->

                        <div class="col-md-8 col-md-offset-2">
                            <ul class="social-links">
                                <li><a class="facebook" href="https://kampusgratis.id/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="https://kampusgratis.id/"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="https://kampusgratis.id/"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li><a class="pinterest" href="https://kampusgratis.id/"><i
                                            class="fa fa-pinterest"></i></a></li>
                                <li><a class="instagram" href="https://kampusgratis.id/"><i
                                            class="fa fa-instagram ing"></i></a></li>
                                <li><a class="linkedin" href="https://kampusgratis.id/"><i
                                            class="fa fa-linkedin ing"></i></a></li>
                            </ul>
                        </div>
                        <!-- End social links -->
                    </div>
                    <!-- End morphsearch-content -->
                    <span class="morphsearch-close"></span>
                </div>
                <!-- End morphsearch -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- Start search-section -->

    <!-- Start background section -->
    <section class="error-background">
        <img class="cloud-small cloud animated" src="images/cloud-1.png" data-animation="fromLeft25"
            data-animation-delay="3000" data-xrange="20" data-yrange="20" alt="">

        <img class="cloud-big cloud animated" src="images/cloud-1.png" data-animation="fromLeft8"
            data-animation-delay="3500" data-xrange="30" data-yrange="30" alt="">

        <img class="cloud-rain cloud animated" src="images/cloud-2.png" data-animation="fromRight8"
            data-animation-delay="4000" data-xrange="40" data-yrange="40" alt="">

        <img class="rock animated" src="images/rock.png" data-animation="fromRight0" data-animation-delay="600" alt="">

        <img class="sea-island animated" src="images/sea-island.png" data-animation="fromLeft0"
            data-animation-delay="600" alt="">

        <img class="shark animated" src="images/shark.png" data-animation="fromLeft70" data-animation-delay="3200"
            alt="">
    </section>
    <!-- End background section -->

    <!-- Js files -->
    <script src="{{ url('error/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ url('error/js/plax.js') }}"></script>
    <script src="{{ url('error/js/classie.js') }}"></script>
    <script src="{{ url('error/js/custom.js') }}"></script>
</body>

</html>
