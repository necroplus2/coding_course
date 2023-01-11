<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Muhammad Irwan</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/course/bootstrap.min.css') }}">
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/course/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/course/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/course/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/course/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/course/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->

      @include('course.layout.header')

      @yield('container')

      @include('course.layout.footer')

      <!-- Javascript files-->
      <script src="{{ asset('js/course/jquery.min.js') }}"></script>
      <script src="{{ asset('js/course/popper.min.js') }}"></script>
      <script src="{{ asset('js/course/bootstrap.bundle.min.js') }}"></script>
      {{-- <script src="{{ asset('js/course/jquery-3.0.0.min.js') }}"></script> --}}
      <script src="{{ asset('js/course/plugin.js') }}"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{ asset('js/course/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/course/custom.js') }}"></script>
   </body>
</html>