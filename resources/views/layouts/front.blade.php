<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alumni Fakultas Hukum</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('freelancer/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('freelancer/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('freelancer/css/freelancer.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.css">
    <style>
      #jdl{
          background-color: #cccccc;
      }
      .dwont{
          display: block;
      }
      #nvbar{
          background-color: red;
      }
      #cnt{
          width: 70%;
          background-color: white;
          border-radius: 10px;
          margin-bottom: 20px;
          margin-top: 100px;
          opacity: 0.95;
          
      }
      body{
          background-image: url(../images/3.jpg);
          background-position:center center;
          background-attachment: fixed;
          background-size: cover;
          background-repeat: no-repeat;
          width: 100%;
          height: 100%;
      }
      iframe{
        overflow:hidden;
      }
      #front {
        background-image: url("freelancer/img/aa.jpg");
        background-repeat: no-repeat;
        background-position: stretch;
        background-size:cover;
        height: 700px;
      }
  </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ $setting->site_name }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Kuesioner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Hubungi Admin</a>
            </li>
            @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/admin')}}">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/register')}}">Register</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" id="front">
      <div class="container" >
        
        <div class="intro-text">
          <span class="name">{{ $setting->site_name }}</span>
          <hr class="star-light">
          <span class="skills">{{ $setting->tagline }}</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Kuesioner</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.a') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_a.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.b') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_b.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.c') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_c.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.d') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_d.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.e') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_e.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="{{ route('kuesioner.hukum') }}">
              <!-- <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div> -->
              <img class="img-fluid" src="{{ asset('freelancer/img/portfolio/kuesioner_hukum.jpg') }}" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">Tentang</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <?php //echo $setting->about; ?>
            {{ $setting->about }}
          </div>
          <div class="col-lg-8 mx-auto text-center">
            <a href="#portfolio" class="btn btn-lg btn-outline js-scroll-trigger">
              <i class="fa"></i>
              Isi Kuesioner
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Hubungi Admin</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="{{ route('contact.admin') }}" method="post">
              {{ csrf_field() }}
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nama</label>
                  <input class="form-control" name="name" type="text" placeholder="Nama" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Alamat Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Alamat Email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Telepon</label>
                  <input class="form-control" name="phone" type="tel" placeholder="Telepon" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Pesan</label>
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>Kali Rungkut
                <br>Surabaya, Indonesia</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Sosial Media</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="{{ $setting->facebook }}">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="{{ $setting->twitter}}">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="{{ $setting->instagram }}">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Hubungi Admin</h3>
              <p>Telephone: {{ $setting->phone }}</p>
              <p>Email: {{ $setting->email }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; FH Ubaya 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    @yield('kuesioner_a')

    @yield('kuesioner_b')

    @yield('kuesioner_c')
    
    @yield('kuesioner_d')

    @yield('kuesioner_e')

    @yield('kuesioner_hukum')
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('freelancer/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('freelancer/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('freelancer/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('freelancer/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('freelancer/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('freelancer/js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('freelancer/js/freelancer.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}')
        @endif

        @if(Session::has('info'))
            toastr.info('{{ Session::get('info') }}')
        @endif
    </script>
    @yield('scripts')

    @yield('scripts')

  </body>

</html>
