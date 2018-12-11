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
    <title>Trang tin tức tổng hợp </title>
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="client_asset/img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="client_asset/style.css">
    <script src="client_asset/js/jquery/jquery-2.2.4.min.js"></script>
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
            <div class="col-12 col-md-6 col-lg-4" id="hotnew">
                @include('client.layouts.hot')
            </div>
        </div>
    </div>
</div>
<br>

<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4" style="margin-right: 180px;">
                    
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->  <h2 class="widget-title">Trụ sở</h2>
                      
                      
                      <p>
                            Giấy phép số 1818/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 05/05/2017 
                            Đơn vị chủ quản: Công ty Cổ phần Công nghệ The Newspaper <br>
                            Địa chỉ: Nhổn, Bắc Từ Liêm, Hà Nội <br>
                            Tel: 091232824            <br>
                            Email: conact@thenewspaper.com
                      </p>   
                          <p>  The Newspaper tổng hợp và sắp xếp các thông tin tự động 
                            bởi chương trình máy tính
                      </p>
                    </div>
                </div>

            

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h2 class="widget-title">Contact</h2>
                        <!-- List -->
                        <ul class="list">
                            <li><a class="fa fa-facebook-square" href="https://facbook.com"> Facebook.com/TheNewspaper</a></li>
                            <hr>
                            <li><a class="fa fa-youtube-square" href="https://youtube.com"> YouTube.com/TheNewspaper</a></li>
                            <hr><li><a class="fa fa-twitter-square" href="https://twitter.com"> Twitter.com/TheNewspaper</a></li>
                            <hr><li><a class="fa fa-reddit-square" href="https://reddit.com"> Reddit.com/r/TheNewspaper</a></li>
                            
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <br>
                
                <div class="col-12 col-sm-4 col-lg-3">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h2 class="widget-title">About us</h2>
                        <!-- List -->
                        <ul class="list">
                            <li><p class="glyphicon glyphicon-user"> Nguyễn Anh Phương</p></li><hr>
                            <li><p class="glyphicon glyphicon-user"> Triệu Kim Hậu</p></li><hr>
                            <li><p class="glyphicon glyphicon-user"> Trần Đức Hiếu</p></li> 
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->

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
             lt += '<li ><a href="/category/'+ element[i].id +'">'+element[i].Ten +'</a></li>';
        }

        var str = '<li class="cn-dropdown-item has-down"><a>'
            + element[0]['theloai'].Ten + '</a><ul class="dropdown">'+ lt +'</ul></li>';
            
           // console.log(element[0]['theloai'].Ten +'asd');
        $('#category').prepend(str);
    });

</script>
</body>

</html>