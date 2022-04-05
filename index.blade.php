@if(session('loginmessage'))
    <script>alert('{{session('loginmessage')}}')</script>
@endif
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym System">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>Gym System</title>

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

<!-- Header Section Begin -->
@include('navbar')
<!-- Header End -->

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2>Join Us Now</h2>
                            <h1>Hulk Gym</h1>
                            <a href="aboutus" class="primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2>Join Us Now</h2>
                            <h1>Hulk Gym</h1>
                            <a href="aboutus" class="primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2>Join Us Now</h2>
                            <h1>Hulk Gym</h1>
                            <a href="aboutus" class="primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Feature Section Begin -->
<section class="feature-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/supplements.jpg">
                    <h3>Supplements</h3>
                    <p>Here You can buy all our<br/> Supplements</p>
                    <a href="#" class="primary-btn f-btn">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-2.jpg">
                    <h3>PERSONAL TRAINING</h3>
                    <p>Strep throat is very common during the flu<br/> seasons and it can be preceded</p>
                    <a href="#" class="primary-btn f-btn">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-3.jpg">
                    <h3>Sports Nutrition</h3>
                    <p>A Human Being’s right to life implies his right to<br/> have the free and unrestricted</p>
                    <a href="#" class="primary-btn f-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- About Section Begin -->
<section class="home-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <h2>WELCOME TO CROSSFIT</h2>
                    <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                        everyday men.</p>
                    <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                        the population here in North America, that actually want and need success to be hard! For
                        those of you who are serious about having more, doing more, giving more and being more.</p>
                    <a href="#" class="primary-btn about-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/home-about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Classes Section Begin -->
<section class="classes-section">
    <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                        <h2>Choose Your Program</h2>
                        <p>Our Crossfit experts can help you discover new training techniques and exercises that offer a
                            dynamic and efficient full-body workout.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="img/classes/class-1.jpg">
                    <h4>Crossfit Level 1</h4>
                    <p>Sufferers around the globe will be happy to hear that there are sleep apnea remedies.</p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="img/classes/class-2.jpg">
                    <h4>BootCamp</h4>
                    <p>The oil, also called linseed oil, has many industrial uses – it is an important ingredient
                    </p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="img/classes/class-3.jpg">
                    <h4>Energy Blast</h4>
                    <p>It is a very common occurrence like cold or fever depending upon your lifestyle. </p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="img/classes/class-4.jpg">
                    <h4>CLASSIC BODY BALANCE</h4>
                    <p>The procedure is usually a preferred alternative to photorefractive keratectomy,</p>
                    <a href="#" class="primary-btn class-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Classes Section End -->

<!-- Class Time Section Begin -->
<section class="classtime-section class-time-table spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Classtime Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timetable-controls">
                    <ul>
                        <li class="active" data-tsfilter="all">all <classes></classes></li>
                        <li data-tsfilter="crossfit">crossfit</li>
                        <li data-tsfilter="lunge">Boxing</li>
                        <li data-tsfilter="ppsr">Yoga</li>
                        <li data-tsfilter="walls">Zomba</li>
                        <li data-tsfilter="candy">MMA</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="classtime-table">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Saturday</th>
                    <th>Sunday</th>

                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="workout-time">10.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>10.00 - 14.00</span>
                        <h6>Crossfit</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>10.00 - 15.00</span>
                        <h6>Crossfit</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>10.00 - 13.00</span>
                        <h6>Boxing</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>10.00 - 13.30</span>
                        <h6>Boxing</h6>
                    </td>
                </tr>
                <tr>
                    <td class="workout-time">14.00</td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>14.00 - 17.00</span>
                        <h6>Boxing</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>14.00 - 17.00</span>
                        <h6>Crossfit</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>14.00 - 15.30</span>
                        <h6>Zomba</h6>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="workout-time">16.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>16.00 - 18.00</span>
                        <h6>Boxing</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="candy">
                        <span>16.00 - 19.00</span>
                        <h6>MMA</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="candy">
                        <span>16.00 - 19.00</span>
                        <h6>MMA</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="ppsr">
                        <span>16.00 - 17.00</span>
                        <h6>Yoga</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="ppsr">
                        <span>16.00 - 20.00</span>
                        <h6>Yoga</h6>
                    </td>
                </tr>
                <tr>
                    <td class="workout-time">18.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>18.00 - 20.00</span>
                        <h6>Zomba</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="ppsr">
                        <span>18.00 - 20.00</span>
                        <h6>Yoga</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="candy">
                        <span>18.00 - 22.00</span>
                        <h6>MMA</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>18.00 - 22.00</span>
                        <h6>Boxing</h6>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="workout-time">20.00</td>
                    <td class="hover-bg ts-item" data-tsmeta="lunge">
                        <span>21.00 - 23.00</span>
                        <h6>Boxing</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>20.00 - 22.00</span>
                        <h6>Zomba</h6>
                    </td>
                    <td class="hover-bg ts-item" data-tsmeta="walls">
                        <span>20.30 - 23.00</span>
                        <h6>Zomba</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>22.00 - 23.00</span>
                        <h6>Crossfit</h6>
                    </td>
                    <td></td>
                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                        <span>21.00 - 23.00</span>
                        <h6>Crossfit</h6>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Class Time Section End -->

<!-- Price Plan Section Begin -->
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
<!-- Price Plan Section End -->

<!-- Choseus Section Begin -->
<section class="chooseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Why People Choose Us</h2>
                    <p>Our sport experts and latest sports equipment are the winning combination.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-1.png" alt="">
                    <h5>Support 24/7</h5>
                    <p>One of the best ways to make a great vacation quickly horrible is to choose the wrong
                        accommodations for your trip. </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-2.png" alt="">
                    <h5>Our trainer</h5>
                    <p>If you are an infrequent traveler you may need some tips to keep the wife happy while you are
                        jet setting around the globe.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-3.png" alt="">
                    <h5>Personalized sessions</h5>
                    <p>To succeed at any endeavor, you must stay the course…no matter what the cost! Here are some
                        surefire tips to help you on your journey.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-4.png" alt="">
                    <h5>Our equipment</h5>
                    <p>Rugby and Stratford-upon-Avon. Additionally, there are many things to see and do in and
                        around Coventry itself.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-5.png" alt="">
                    <h5>Classes daily</h5>
                    <p>We would just not have the will in us to go about our daily lives. Its motivation that helps
                        us get through the most mundane.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <img src="img/icons/chose-icon-6.png" alt="">
                    <h5>Focus on your health</h5>
                    <p>But there is only so far we can go within the constraints of a family budget in building the
                        perfect telescopic operation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choseus Section End -->




<!-- Blog Section Begin -->


<!-- Cta Section Begin -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-text">
                    <h3>GeT Started Today</h3>
                    <p>New student special! Get your first 3months for 999!</p>
                </div>
                <a href="signup" class="primary-btn cta-btn">book now</a>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End -->

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
