<!DOCTYPE html>
<html lang="en" >

  <head>

    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>جامه دیزاین</title>

    <!-- Bootstrap core CSS -->
    <link href="Web-Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="Web-Assets/assets/css/fontawesome.css">
    <link rel="stylesheet" href="Web-Assets/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="Web-Assets/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>جامه <em>دیزاین</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('welcome') }}"><span class="fa fa-home" style="color: #f33f3f"></span> صفحه اصلی
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('products') }}"><span class="fa fa-yelp" style="color: #f33f3f"></span> محصولات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"><span class="fa fa-info-circle" style="color: #f33f3f"></span>  درباره ما</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}"><span class="fa fa-paper-plane-o" style="color: #f33f3f"></span> تماس باما</a>
              </li>
              @if (Route::has('login'))
                @auth
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><span class="fa fa-sign-in" style="color: #f33f3f"></span> پنل کاری</a>
                  </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}"><span class="fa fa-sign-in" style="color: #f33f3f"></span> ورود</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}"><span class="fa fa-heart" style="color: #f33f3f"></span> پیوستن</a>
                    </li>
                    @endif
                @endauth
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_01.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$25.75</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_02.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$30.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (21)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_03.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$20.45</h6>
                <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_04.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$15.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_05.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$12.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="Web-Assets/assets/images/product_06.jpg" alt="" style="height: 350px; width: 100%"></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$22.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="text-right">درباره جامه دیزاین</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>آیا به دنبال بهترین استید؟</h4>
              <p>ماموریت ما در جهت کمک کردن به زنان افغان در راستای استقلالیت مالی آنان می‎باشد. و می‎خواهیم که آنان در کنار استقلالیت مالی از حقوقی اولیه و بسیار مهم حیاتی شان نیز آگاه سازیم و به عنوان شهروندان آگاه، مسول سرنوشت خودشان بوده و در تمامی عرصه‎‎های اجتماعی، تجارتی، سیاسی و تصمیم‎گیری نقش فعال خویش را ایفاء نمایند. بدین‎گونه ما نه‎تنها می‎توانیم افراد را کمک کنیم بلکه توسط این افراد می‎توانیم فامیل‎ها و قشری حاضی جامعه را کمک کنیم که در جستجوی حقوق شان بوده و برای یک زندگی مدرن تلاش کنند.  ماموریت موسسه بانوان نسل تغییر زمانی بشکل موافقانه قابل تطبیق است که بتوانیم برای خانم های افغان آزادی، آگاهی و برابری را نوید دهیم. </p>
                <h4 style="direction: rtl">فعالیت های ما:</h4>
                <p>دیزاین</p>
                <p>دوخت انواع لباس ها</p>
                <p>آموزش حرفه یی خیاطی</p>
                <p>الگوی سازی</p>
                <p>نرندنیگ</p>
              <a href="about.html" class="filled-button">بیشر بدانید</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="Web-Assets/assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content" style="direction: rtl">
              <div class="row">
                <div class="col-md-8">
                  <h4>آیا به دنبال بهترین استید</h4>
                  <p>از جامه دیزاین آسانتر از هر زمانی دیگر خرید کند</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">همین اکنون مشتری ما شوید</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="Web-Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Web-Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="Web-Assets/assets/js/custom.js"></script>
    <script src="Web-Assets/assets/js/owl.js"></script>
    <script src="Web-Assets/assets/js/slick.js"></script>
    <script src="Web-Assets/assets/js/isotope.js"></script>
    <script src="Web-Assets/assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
