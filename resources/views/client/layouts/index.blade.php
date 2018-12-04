<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Trang tin tức tổng hợp &amp; Lifestyle Magazine Template</title>
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link rel="icon" href="client_asset/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="client_asset/style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
@include('client.layouts.header')

<!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="client_asset/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="category">
                                {{--<li><a href="#">Politics</a></li>--}}
                                {{--<li><a href="#">Breaking News</a></li>--}}
                                {{--<li><a href="#">Business</a></li>--}}
                                {{--<li><a href="#">Technology</a></li>--}}
                                {{--<li><a href="#">Health</a></li>--}}
                                {{--<li><a href="#">Travel</a></li>--}}
                                {{--<li><a href="#">Sports</a></li>--}}
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
               @yield('content')
            </div>
           @include('client.layouts.hot')
        </div>
    </div>
</div>

<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Politics</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Featured</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">FAQ</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">+More</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="client_asset/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="client_asset/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="client_asset/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="client_asset/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="client_asset/js/active.js"></script>
<script>
    $.extend({
        getData: function (url) {
            var result = null;
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'post',
                dataType: 'json',
                async: false,
                success: function(data) {
                    result = data;
                    console.log(data[0][0].Ten);
                }
            });
            return result;
        }
    });
    var data  = JSON.parse($.getData('/ajax_load'));
    data.forEach(element => {
        var lt = '';
        for(var i = 0;i< element.length ; i++)
        {
             lt += '<li ><a href="#">'+element[i].Ten +'</a></li>';
        }

        var str = '<li class="cn-dropdown-item has-down"><a href="#">'
            + element[0]['theloai'].Ten + '</a><ul class="dropdown">'+ lt +'</ul></li>';
            console.log(str);
           // console.log(element[0]['theloai'].Ten +'asd');
        $('#category').prepend(str);
    });

   
      

</script>
</body>

</html>