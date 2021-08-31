<!doctype html>
<html lang="en">
  <head>
    <title>Contact App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('public/css/all.css')}}">
  </head>
  <body>
    
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Contact App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="{{route('contact')}}">Contacts<span class="sr-only">(current)</span></a>
          <a class="nav-link active" href="{{route('contact.create')}}">New Contact</a>
        </div>
      </div>
    </nav>
    <!-- navbar end -->
    
    <div class="container">
      <div class="row justify-content-center">
        @yield('content')
      </div>
    </div>
    
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{asset('public/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
    <script>
       setTimeout(function() {
        $('.alert').fadeOut('slow');}, 4000
      );
    </script>
  </body>
  </html>
  
  
  