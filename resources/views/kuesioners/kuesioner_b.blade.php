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
  </style>

  </head>
<body>

<div class="container">
    <br>
    <a class="btn btn-success" href="{{ route('index') }}">Kembali</a>
    <hr class="star-primary">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdt9mHgP38jIgZgEDr5VpG99o70Zlz27cjIMVHaMc1GWlq0hQ/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>

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
