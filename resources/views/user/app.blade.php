<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/user/images/favicon.ico') }}">

    <!-- jQuery -->
    <script src="{{ asset('/user/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('/user/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('/user/css/bootstrap.css?v=1.0') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('/user/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset('/user/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('/user/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('/user/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/user/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <script src="{{ asset('/user/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- custom style -->
    <link href="{{ asset('/user/css/ui.css?v=1.0') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/user/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset('/user/js/script.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>



 <body>
  
    <!-----------------------------------------------------
                    headersection start
     ------------------------------------------------------->
     @include('user.layout.header')
     <!-------------------------------------------------------
                    headersection end
     ------------------------------------------------------->
      
    <!-----------------------------------------------------
                     main content  start 
     ----------------------------------------------------->
    @yield('content')
    <!-------------------------------------------------------
                    main content end
     ----------------------------------------------------->
     <!-----------------------------------------------------
                     subscribe section  start 
     ----------------------------------------------------->
    @include('user.layout.subscribe')
    <!-------------------------------------------------------
               subscribe section end
     ----------------------------------------------------->
    <!-------------------------------------------------------
                    footersection start
     ------------------------------------------------------->
     @include('user.layout.footer')
     <!-------------------------------------------------------
                    footersection end
     ------------------------------------------------------->
</body> 
</html>