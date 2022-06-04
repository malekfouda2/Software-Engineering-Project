@if(session('addmessage'))
    <script>alert('{{session('addmessage')}}');</script>
@endif
@if(session('coachmsg'))
    <script>alert('{{session('coachmsg')}}');</script>
@endif

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitar | Template</title>

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
<div id="preloder">a
    <div class="loader"></div>
</div>


@include('navbar')

<!-- User Section Begin -->
<section class="price-section spad set-bg" data-setbg="img/price-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CHOOSE YOUR PRICING PLAN</h2>
                    <p>These reports started to surface when Congress was having hearings about the<br/>
                        painkiller, Vioxx. A Food and Drug Administration staff member.</p>
                </div>
                <div class="toggle-option">
                    <ul>
                        <li>Monthly</li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </li>
                        <li>Years</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Normal</h4>
                    <div class="price-plan">
                        <h2>400 EGP</h2>
                        <p>Monthly</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>1 class per week</li>
                        <li>3 Invitations</li>
                        <li>1 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Professional</h4>
                    <div class="price-plan">
                        <h2>999 EGP </h2>
                        <p>3 Months</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>2 classes per week</li>
                        <li>9 Invitations</li>
                        <li>2 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price-plan">
                    <h4>Advanced</h4>
                    <div class="price-plan">
                        <h2>3000 EGP</h2>
                        <p>1 Year</p>
                    </div>
                    <ul>
                        <li>Unlimited access to the gym</li>
                        <li>4 classes per week</li>
                        <li>36 Invitation</li>
                        <li>12 Free personal training</li>
                    </ul>
                    <a href="#" class="primary-btn price-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Aboutus Section End -->

<!-- Trainer Section Begin -->
<section class="trainer-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CHOOSE YOUR TRAINER</h2>
                    <p>Our Trainers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($coaches as $coach)
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="ti-pic" data-toggle="modal" data-target="#exampleModal{{$coach->id}}">
                            <img src="{{$coach->image}}" alt="">
                            <div class="trainer-text">
                                <h5>{{$coach->name}} <span>- COACH</span></h5>
                            </div>
                            <div class="modal fade" id="exampleModal{{$coach->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Coach - {{$coach->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Make {{$coach->name}} your coach?
                                        </div>
                                        <div class="modal-footer">
                                            <form method="post" action="">
                                                @csrf
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                                </button>
                                                <input type="text" name="cid" hidden value="{{$coach->id}}">
                                                <button type="submit"  class="btn btn-primary">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>MEET SOME OF OUR PRODUCTS</h2>
            </div>
        </div>
    </div>
</section>
<!-- Trainer Section End -->


<!-- Testimonial Section End -->
<section class="testimonial-section set-bg spad" data-setbg="img/grey.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-slider owl-carousel">
                    @foreach($supplements as $sp)
                        <div class="ts-item">
                            <div class="shake1 img">
                                <img src="{{$sp->image}}"
                                     width="10"
                                     height="500" alt="">
                            </div>
                            <div class="price-plan">
                                <h2>{{$sp->price}} <span>EGP</span></h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Testimonial Section End -->


<!-- Cta Section Begin -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-text">
                    <h3>GO TO OUR SHOP</h3>
                </div>
                <div>
                    <a href="#" class="primary-btn cta-btn">Shop now</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Cta Section End -->

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
