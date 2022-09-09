<!DOCTYPE html>
<html lang="tr">
dd
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    @yield('pageStyle')
    @yield('pageScript')
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="logo-512.png" alt="">
            <span>{{ config('app.name', 'Laravel') }}</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#about">Hakkimiza</a></li>
                <li><a class="nav-link scrollto" href="#services">Ürünler</a></li>
                <li><a class="nav-link scrollto" href="#referans">Referans</a></li>
                <li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
{{--                <li><a href="blog.html">Blog</a></li>--}}
                <li><a class="nav-link scrollto" href="#contact">İletişim</a></li>
                @if (Route::has('login'))
                        @auth
                            <li><a class="getstarted scrollto" href="{{route('panel')}}">{{ Auth::user()->displayname }}</a></li>
                        @else
                            @if (Route::has('register'))
                                <li><a class="nav-link scrollto" href="{{ url('register') }}">Üyelik</a></li>
                            @endif
                                <li><a class="getstarted scrollto" href="{{ url('login') }}">Giriş</a></li>
                        @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@if (URL::current() == route('home'))
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">İşinizi büyütmek için modern çözümler sunuyoruz</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Online bağlantı ile Sigorta sorunlarının çözümüyüz</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Ürünler</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
@endif

<main id="main">
    @yield('content')
</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Bültenimiz</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Abone ol">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 footer-info">
                    <a href="{{url('/')}}" class="logo d-flex align-items-center">
                        <img src="logo-512.png" alt="">
                        <span>{{config('app.name')}}</span>
                    </a>
                    <p>ALİ ACAR Sigorta; Yangın, Oto Kaza, Oto Dışı Kaza ve Sorumluluk, Mühendislik ve Nakliyat ve Sağlık Sigortası alanlarında çok çeşitli ürünler sunmaktadır. Geniş ürün portföyü sayesinde hali hazırda ve gelecekte oluşabilecek her türlü ihtiyaca karşı kişiye özel çözümler üretilmektedir.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Ürünümüz</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i>Yabanci Sağlik Sigorta</li>
                        <li><i class="bi bi-chevron-right"></i>Seyahat Sağlik Sigorta</li>
                        <li><i class="bi bi-chevron-right"></i>Özel Sağlik Sıgorta</li>
                        <li><i class="bi bi-chevron-right"></i>Trafik Sigorta</li>
                        <li><i class="bi bi-chevron-right"></i>Kasko Sigorta</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Mollagürani Mh. Muratpaşa Sk. <br>Yeni Han No:2 Daire: 503<br>Yusufpaşa - Fatih/İSTANBUL<br><br>
                        <strong>Tel:</strong> +90 850 441 30 16<br>
                        <strong>Email:</strong> info@aliacarpanel.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{config('app.name')}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://ronireklam.com.tr/">Roni Reklam</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
