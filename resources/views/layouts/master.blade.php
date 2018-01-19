<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" href="image/images.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kodaline Website</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>
 <body>
 @include('layouts.header')<br>
  @yield('konten')<br><br><br>
  @include('layouts.footer')<br><br>
     
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>