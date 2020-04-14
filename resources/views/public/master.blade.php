<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Evento - Event Html Template</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{url('public/css/icon.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{url('public/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/evanto/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{url('public/evanto/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('public/evanto/css/et-line.css')}}" rel="stylesheet">
    <link href="{{url('public/evanto/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{url('public/evanto/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('public/evanto/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{url('public/css/animate.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{url('public/evanto/css/main.css')}}" rel="stylesheet">
    <link href="{{url('public/evanto/css/styles.css')}}" rel="stylesheet">
    <link href="{{url('public/evanto/plugins/jquery.gScrollingCarousel.css')}}" rel="stylesheet">
    <style>
      .Slideitems{
          padding: 100px 0px 0px 0px;
          overflow-x: hidden;
          margin: 0px 10px 0px 0px;
              
        }
        .Slideitems img{
          display: inline-block;
          margin-right: 10px;
          width: 400px;
          height: 180px;
          border-radius: 10px;
          object-fit: cover;
          line-height: 150px;
          box-shadow: 0 0 5px #333;
          text-align: center;
          overflow-x: hidden;
        }
    </style>
</head>
<body>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md" style="z-index: 1 !important;">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="{{url('public/img/logo.png')}}" alt="nusa"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link " href="#">Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Register</a>
                </li>
                
            </ul>
        </div>
    </div>
</header>

<div class="SectionHeader">
  <div class="input-icons"> 
    <i class="ion-ios-search icon"></i> 
    <input type="text" class="searchHeader" placeholder="what you looking for ?">
    <marquee behavior="scroll" direction="left" style="color:white"> Pengumuman 1 &bull;  Pengumuman 2  &bull; Pengumuman 3 &bull;  Pengumuman 4</marquee>
  </div>
</div>
<div id="app">
    <router-view :key="$route.fullPath"></router-view>
</div>
<!--footer start -->
<footer>

        <div class="row justify-content-center">
          <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer_box">
                        <div class="footer_box_body">
                            <h6 class="footer_title_body">
                                Bantuan
                            </h6>
                            <ul class="footerUl">
                                <li>Pembayaran</li>
                                <li>Status Pesanan</li>
                                <li>Pengembalian Produk</li>
                                <li>Cara pemesanan</li>
                                <li>Hubungi Kami</li>
                            </ul>
                            <ul class="footer_social">
                                <li>
                                    <a href="#"><i class="ion-social-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_box">
                        <div class="footer_box_body">
                            <h6 class="footer_title_body">
                                Customer Care
                            </h6>
                            <ul class="footerUl">
                                <li>Whatsapp : +62 852 7176 5102</li>
                                <li>Email : <span style="font-size:11px">reservation@nusaindahtourtravel.com</span></li>
                                <li>Alamat</li>
                                <li>PT. BIRO PERJALANAN WISATA NUSA INDAH
                                    Komplek Pertokoan Coastarina Blok A No.1
                                    Batam, Riau, Indonesia 29432</li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer_box">
                        <div class="footer_box_body">
                            <h6 class="footer_title_body">
                                Info nusaindahtourtravel
                            </h6>
                            <ul class="footerUl">
                                <li>Tentang nusaindahtourtravel.com</li>
                                <li>kabar Terbaru</li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer_box">
                        <div class="footer_box_body">
                            <h6 class="footer_title_body">
                                Kerja Sama 
                            </h6>
                            <ul class="footerUl">
                                <li>Tentang nusaindahtourtravel.com</li>
                                <li>kabar Terbaru</li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="{{url('public/evanto/js/jquery.min.js')}}"></script>
<script src="{{url('public/evanto/plugins/jquery.gScrollingCarousel.js')}}"></script>
<!-- bootstrap -->
<script src="{{url('public/evanto/js/popper.js')}}"></script>
<script src="{{url('public/evanto/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/evanto/js/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script src="{{url('public/evanto/js/owl.carousel.min.js')}}"></script>
<!--parallax -->
<script src="{{url('public/evanto/js/parallax.min.js')}}"></script>
<!--Counter up -->
<script src="{{url('public/evanto/js/jquery.counterup.min.js')}}"></script>
<!--Counter down -->
<script src="{{url('public/evanto/js/jquery.countdown.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{url('public/evanto/js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{url('public/evanto/js/main.js')}}"></script>
<script src="{{url('public/js/app.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(".g-scrolling-carousel .items").gScrollingCarousel();

    });
</script>
</body>
</html>