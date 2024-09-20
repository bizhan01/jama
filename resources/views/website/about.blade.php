<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}"><span class="fa fa-home" style="color: #f33f3f"></span> صفحه اصلی
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('products') }}"><span class="fa fa-yelp" style="color: #f33f3f"></span> محصولات</a>
              </li>
              <li class="nav-item active">
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>درباره ما</h4>
              <h2>شرکت طراحی و تولید جامه دیزاین</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="text-right">درباره ما</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="Web-Assets/assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>آیا به دنبال بهترین استید؟</h4>
              <p>ماموریت ما در جهت کمک کردن به زنان افغان در راستای استقلالیت مالی آنان می‎باشد. و می‎خواهیم که آنان در کنار استقلالیت مالی از حقوقی اولیه و بسیار مهم حیاتی شان نیز آگاه سازیم و به عنوان شهروندان آگاه، مسول سرنوشت خودشان بوده و در تمامی عرصه‎‎های اجتماعی، تجارتی، سیاسی و تصمیم‎گیری نقش فعال خویش را ایفاء نمایند. بدین‎گونه ما نه‎تنها می‎توانیم افراد را کمک کنیم بلکه توسط این افراد می‎توانیم فامیل‎ها و قشری حاضی جامعه را کمک کنیم که در جستجوی حقوق شان بوده و برای یک زندگی مدرن تلاش کنند.  ماموریت موسسه بانوان نسل تغییر زمانی بشکل موافقانه قابل تطبیق است که بتوانیم برای خانم های افغان آزادی، آگاهی و برابری را نوید دهیم. </p>

              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="text-right">تیم کاری ما</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_01.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>عبدالله حسینی</h4>
                <span>طراح</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_02.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>رحیمه اکبری</h4>
                <span>مدیریت مالی</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_03.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>علی رضایی</h4>
                <span>خیاط</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_04.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>زهرا نوری</h4>
                <span>مدیر بازاریابی</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_05.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>جاوید پویا</h4>
                <span>برشکار</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="Web-Assets/assets/images/team_06.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>شکیبا کجابی</h4>
                <span>طراح</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>طراحی مدل های جدید</h4>
                <p>ماموریت ما در جهت کمک کردن به زنان افغان در راستای استقلالیت مالی آنان می‎باشد. و می‎خواهیم که آنان در کنار استقلالیت مالی از حقوقی اولیه و بسیار مهم حیاتی شان نیز آگاه سازیم </p>
                <a href="#" class="filled-button">بیشتر بخوانید</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>دوخت انواع لباس ها</h4>
                <p>ماموریت ما در جهت کمک کردن به زنان افغان در راستای استقلالیت مالی آنان می‎باشد. و می‎خواهیم که آنان در کنار استقلالیت مالی از حقوقی اولیه و بسیار مهم حیاتی شان نیز آگاه سازیم </p>
                <a href="#" class="filled-button">بیشتر بخوانید</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>آموزش حرفه یی خیاطی</h4>
                <p>ماموریت ما در جهت کمک کردن به زنان افغان در راستای استقلالیت مالی آنان می‎باشد. و می‎خواهیم که آنان در کنار استقلالیت مالی از حقوقی اولیه و بسیار مهم حیاتی شان نیز آگاه سازیم </p>
                <a href="#" class="filled-button">بیشتر بخوانید</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="text-right">همکاران ما</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>

              <div class="client-item">
                <img src="Web-Assets/assets/images/client-01.png" alt="2">
              </div>

              <div class="client-item">
                <img src="Web-Assets/assets/images/client-01.png" alt="3">
              </div>

              <div class="client-item">
                <img src="Web-Assets/assets/images/client-01.png" alt="4">
              </div>

              <div class="client-item">
                <img src="Web-Assets/assets/images/client-01.png" alt="5">
              </div>

              <div class="client-item">
                <img src="Web-Assets/assets/images/client-01.png" alt="6">
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
