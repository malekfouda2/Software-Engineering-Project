<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>Hulk || View Membership</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


@include('navbar')

<section class="classes-section">
    <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                        <h2>Your Membership</h2>
                        @foreach($membership as $m)
                            <h4>Type: {{$m->type}}</h4>
                            <h4>Start date: {{$m->start_date}}</h4>
                            <h4>End date: {{$m->finish_date}}</h4>
                            @php
                                $now = time(); // or your date as well
                                $your_date = strtotime($m->finish_date);
                                $datediff = $your_date - $now;
                                echo "<h4>". round($datediff / (60 * 60 * 24)) ." days left.</h4>";
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-logo-item">
                    <div class="f-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="social-links">
                        <h6>Follow us</h6>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-widget">
                    <h5>Get Info</h5>
                    <ul class="footer-info">
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>Phone:</span>
                            (12) 345 6789
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span>Email:</span>
                            HulkGym@gmail.com
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address:</span>
                            Madinet Nasr, El Hay el Asher, El Waha Street 3 Building 9 Block 1
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
