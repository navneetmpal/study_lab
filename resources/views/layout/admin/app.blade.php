<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">    
        
        <title>StudyLabz</title>
        <meta name=description content="">
        <meta name=keywords content="">
        <meta name=author content="">
        
        <link rel="icon" type="image/png" href="{{asset('asset/images/favicon.ico')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/images/favicon.ico')}}">
        
        <!-- Required Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Required Css -->        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl_carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fancy_scroller.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font_awesome.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/swiper.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/common.css')}}">        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">        
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/admin.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        
        <!-- Required Js -->
        <script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <!--tinycms --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
        <!-- sweet alert -->
        <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    </head>
<body>
    <div id="wrap">
        @include('layout.admin.header')
        @include('layout.admin.sidebar')
        <div class="admin">
            @yield('content')
        </div>
    </div>
    @include('sweetalert::alert')
        @yield('adminjs')
    <script src="{{asset('asset/js/swiper.js')}}"></script> 
</body>
</html>
