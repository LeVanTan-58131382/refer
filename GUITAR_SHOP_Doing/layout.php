<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="header">
        <div class="canggiua">
            <div class="trai">
                <img class="img_logo" src="http://localhost/PHP_SHOP_FRAME/GUITAR_SHOP_Doing/images/logo.jpg" alt="">
                <a class="logo" href="#">Shop sách TanLee</a>
            </div>
            <div class="date">
                Tháng {{$calendar->month}} Năm {{$calendar->year}}
            </div>
        </div>
    </div>
    <div class="ad">
        <div class="ad-part-content">
            <!-- phần nội dung cho cả khách hàng và admin -->
        </div>
    </div>
    </div>
</body>
<style>
    .ad-part-left a {
        text-decoration: none;
    }

    .date {
        position: absolute;
        right: 20px;
    }
</style>

<script>
    jQuery(document).ready(function($) {
        $(window).scroll(function(event) {
            var vitri = $(window).scrollTop();
            if (vitri >= 80) {
                $('.header').css({
                    'top': '-80px'
                });
                $('.ad-menu-right').css({
                    'position': 'fixed',
                    'top': '0px',
                    'left': '20%'
                });
                $('.ad-menu-right li').css({
                    'width': '20%'
                });
            } else {
                $('.header').css({
                    'top': '0px'
                });
                $('.ad-menu-right').css({
                    'top': '80px'
                });
            }
        });
    });
</script>

</html>