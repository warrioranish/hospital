<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Valeo</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/main.css')}}" id="color-switcher-link">
    <link rel="stylesheet" href="{{asset('theme/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/fonts.css')}}">
    <script src="{{asset('theme/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('theme/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{asset('theme/js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{asset('theme/js/vendor/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <div class="widget widget_search">
        <form method="get" class="searchform form-inline" action="../">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">
                <span class="sr-only">Search</span>
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <section class="page_toplogo table_section table_section ls section_padding_20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-push-4 text-center">
                        <a href="../" class="logo">
                            <img src="{{asset('theme/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 col-sm-pull-4 text-center text-sm-left contact-teaser">
                        <span class="small-text">Emergency cases</span>
                        <p class="yantramanov weight-black fontsize_25">+1(800) 450 7550</p>
                    </div>
                    <div class="col-sm-4 text-center text-sm-right contact-teaser">
                        <span class="small-text">online consultation</span>
                        <p class="yantramanov weight-black fontsize_25 text-uppercase">valeo@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>

