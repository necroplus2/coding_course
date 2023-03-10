<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('images/course/favicon.ico') }}">
    <title>Affiliates | HTML Bootstrap Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="{{ asset('css/course/theme.css') }}" rel="stylesheet">
    {{-- font awesome 5--}}
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <!-- Begin tracking codes here, including ShareThis/Analytics -->

    <!-- End tracking codes here, including ShareThis/Analytics -->
    {{-- jquery --}}
    <script src="{{ asset('js/course/jquery.min.js') }}"></script>

</head>

<body class="layout-default">
    @include('course.layout.navbar')
    
    <div class="site-content">
        @yield('container')
    </div>

    @if(Request::is('module*'))
    
    @else
        @include('course.layout.footer')
    @endif
    <!-- JavaScript
================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/course/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('js/course/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/course/theme.js') }}"></script>
</body>

</html>
