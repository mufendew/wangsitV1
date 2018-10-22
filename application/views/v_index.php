<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127828297-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127828297-1');
    </script>

    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Wangsit KBMSI</title>
    <meta name="Description" content="WANGSIT adalah platform online milik KBMSI FILKOM UB"/>
    <meta name="Keywords" content="KBMSI, kbmsi, WANGSIT, wangsit, SI, Sistem Informasi, SISTEM INORMASI, FILKOM, UB, Fakultas Ilmu Komputer, Universiats Brawijaya, sistem informasi, fakultas ilmu komputer, universitas brawijaya, si"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="assets/css/master.css"/>
    <link rel="icon" type="image/x-icon" href="favicon.png"/>
</head>
<body>
    <div class="b-page-wrap">

        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a href="<?php echo base_url();?>" class="navbar-brand scroll">
                <img src="assets/media/general/logo-white.png" alt="logo" class="normal-logo"/>Wangsit
            </a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo base_url();?>academy">Wangsit Academy</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>market">Wangsit Market</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>article">Wangsit Article</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>login">Login</a>
                </li>
            </ul>
        </div>

        <header class="header-transparent wow slideInDown">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class="b-logo">
                            <a href="<?php echo base_url();?>">
                                <img src="assets/media/general/logo-white.png" alt="/">
                                <span class="logo-title">Wangsit</span>
                            </a>
                        </div>
                        <!-- Mobile Trigger Start-->
                        <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                        <!-- Mobile Trigger End-->
                    </div>
                    <div class="hidden-xs col-sm-9 col-md-7 col-lg-8">
                        <div class="header-navibox-2">
                            <nav id="nav" class="navbar">
                                <ul class="yamm main-menu nav navbar-nav hidden-xs">
                                    <li>
                                        <a href="<?php echo base_url();?>academy">Wangsit Academy</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>market">Wangsit Market</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>article">Wangsit Article</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>login">Login</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="b-page-content with-layer-bg">
            <!-- ==========================-->
            <!-- PAGES BACKGROUND -->
            <!-- ==========================-->
            <div class="b-layer-big">
                <div class="layer-big-bg page-layer-big-bg">
                    <div class="layer-content-big">
                        <!-- Home slider -->
                        <div class="b-home-slider-holder wow slideInUp">
                            <div class="b-home-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "speed": 1000, "autoplay": true}'>
                                <!-- Home slide 1 -->
                                <div class="home-slide">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                                <div class="b-home-slider-content">
                                                    <h2 class="main-heading">
                                                        Wangsit Academy
                                                    </h2>
                                                    <div class="home-slider-text">
                                                        Wangsit Academy merupakan platform yang dapat digunakan oleh KBMSI untuk belajar dan mencari materi dari setiap Mata Kuliah Prodi Sistem Informasi Universitas Brawijaya.
                                                    </div>
                                                    <a href="<?php echo base_url();?>academy" class="btn btn-secondary">Kunjungi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Home slide 2 -->
                                <div class="home-slide">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                                <div class="b-home-slider-content">
                                                    <h2 class="main-heading">
                                                        Wangsit Market
                                                    </h2>
                                                    <div class="home-slider-text">
                                                        Wangsit Market merupakan platform yang dapat digunakan oleh KBMSI untuk mempromosikan barang dagangannya dan mencari barang yang diinginkan
                                                    </div>
                                                    <a href="<?php echo base_url();?>market" class="btn btn-secondary">Kunjungi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-slick-arrows">
                                <div class="custom-slideshow-controls">
                                    <span id="home-slider-prev" class="slick-arrows-prev arrow-transparent"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span id="home-slider-next" class="slick-arrows-next arrow-transparent"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- END Home slider -->
                    </div>
                </div>
            </div>
            <div class="b-homepage-content-mod">
                <div class="b-layer-main">
                    <!-- Main feature of Wangsit -->
                    <div class="b-home-features">
                        <div class="b-features-columns-holder">
                            <div class="container">
                                <div class="row equal">
                                    <div class="col-xs-12 col-sm-4 col-md-4 wow slideInRight">
                                    	<a href="<?php echo base_url();?>academy">
                                        <div class="b-features-column">
                                            <div class="features-column-icon">
                                                <i class="flaticon-arrow"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Wangsit Academy 
                                            </h6> 
                                            <div class="features-column-text">
                                                Mencari Materi Kuliah? Wangsit Academy tempatnya
                                            </div>
                                        </div>                                    		
                                    	</a>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp">
                                        <div class="b-features-column even-features-column">
                                        	<a href="<?php echo base_url();?>market">
                                            <div class="features-column-icon">
                                                <i class="flaticon-arrow"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Wangsit Market
                                            </h6>
                                            <div class="features-column-text">
                                                Punya barang yang ingin dijual? Wangsit Market aja
                                            </div>                                        		
                                        	</a>
                                        </div>
                                        <div class="page-arrow hidden-xs">
                                            <a href="<?php echo base_url();?>market">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 wow slideInLeft">
                                        <div class="b-features-column">
                                            <div class="features-column-icon">
                                                <i class="flaticon">? ? ?</i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Coming
                                            </h6> 
                                            <div class="features-column-text">
                                                Really
                                                <br>
                                                Soon
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Title services block -->
                    <div class="b-title-service-mod wow fadeInUp">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-3">
                                    <h3 class="big-title-mod">
                                        <b>Wangsit</b> ada untuk <b>KBMSI</b>
                                    </h3>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-4 col-md-offset-1">
                                    <div class="b-text" style="color: black;">
                                        <p style="text-align: justify">
                                            Warung Angkringan Sistem Informasi Ter-Hits yang biasa dikenal dengan Wangsit adalah sebuah Platform Web yang dikembangkan oleh departemen Penelitian dan Pengembangan Studi (P2S) EMSI untuk membantu KBMSI dalam bidang akademik. Berikut adalah fakta unik Wangsit yang harus KBMSI ketahui:
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
                                    <div class="b-links">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p class="inline-title text-uppercase">
                                                    Fitur Wangsit
                                                </p>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>academy">
                                                    Wangsit Academy
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>market">
                                                    Wangsit Market
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services scroll slide -->
                    <div class="b-scroll-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="b-upper-title text-center">Fakta Wangsit</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Sly slider -->
                        <div class="b-sly-slider">
                            <div id="frame" >
                                <ul class="slidee">
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool-1"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Dikembangkan oleh P2S</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Wangsit dikembangkan oleh Departemen P2S Eksekutif Mahasiswa Sistem Informasi
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-technology"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Lahir Pada Tahun 2013</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Wangsit dibangun pada tahun 2013. Awalnya Wangsit adalah sebuah forum diskusi online yang digunakan oleh KBMSI untuk saling berbagi informasi
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Merupakan Pionir Forum Online</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Teman-teman KBMSI patut berbangga karena KBMSI yang pertama kali memiliki Forum Online di FILKOM UB
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-social"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Milik KBMSI FILKOM UB</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Wangsit dapat digunakan oleh seluruh Mahasiswa Sistem Informasi FILKOM UB.
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-technology"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Wangsit Academy Lahir Pada Tahun 2017 </b>
                                            </h6>
                                            <div class="features-column-text">
                                                Wangsit Academy diharapkan bisa mempermudah KBMSI untuk mencari materi perkuliahan yang dibutuhkan. Mau belajar? di Wangsit Academy aja
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-pendulum"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>KIta punya Wangsit Market</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Telah lahir anak baru Wangsit, Wangsit Market. Tempat untuk kamu menjual dan membeli barang yang diinginkan
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-square"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                <b>Akan lebih banyak fitur lagi</b>
                                            </h6>
                                            <div class="features-column-text">
                                                Stay tuned!
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="scrollbar">
                                            <div class="handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-service-page">
                    <div class="b-helper-wrapper">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <br>
            <center>Made with &#10084; by<a href="http://kbmsi.filkom.ub.ac.id/lembaga/emsi/p2s/"> <b>P2S EMSI 2017</b></a></center>
            <br>
        </div>
    </footer>

    <!-- MAIN SCRIPTS-->
    <script src="assets/libs/jquery-1.12.4.min.js"></script>
    <script src="assets/libs/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <!-- Adaptive big text -->
    <script src="assets/plugins/slabText/js/jquery.slabtext.min.js"></script>
    <!-- Sliders -->
    <!-- Owl slider -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Slick slider -->
    <script src="assets/plugins/slick/slick.min.js"></script>
    <!-- Sly slider -->
    <script src="assets/plugins/slyslider/sly.min.js"></script>
    <!-- Bx slider -->
    <script src="assets/plugins/bxslider/vendor/jquery.easing.1.3.js"></script>
    <script src="assets/plugins/bxslider/vendor/jquery.fitvids.js"></script>
    <script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Filter and sorting images-->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <!-- Entry Animations -->
    <script src="assets/plugins/wow.min.js"></script>
    <!-- Calendar plugin -->
    <script src="assets/plugins/pickmeup/pickmeup.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
</body>
</html>