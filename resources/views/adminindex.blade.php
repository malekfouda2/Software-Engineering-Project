@if(session('addmessage'))
    <script>alert('{{session('addmessage')}}');</script>
@endif
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>Hulk || Admin Panel</title>

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
<!-- Hero End -->

<!-- Feature Section Begin -->
<section class="feature-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-1.jpg">
                    <h3>View All Coaches</h3>
                    <a href="/viewcoaches" class="primary-btn f-btn">View</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-2.jpg">
                    <h3>View Supplements</h3>
                    <a href="/viewsupplements" class="primary-btn f-btn">View</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-3.jpg">
                    <h3>Add New Member</h3>
                    <a href="/addmember" class="primary-btn f-btn">Add</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-1.jpg">
                    <h3>View All Requests</h3>
                    <a href="/viewrequests" class="primary-btn f-btn">View</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-2.jpg">
                    <h3>View Memberships</h3>
                    <a href="/viewmemberships" class="primary-btn f-btn">view</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item set-bg" data-setbg="img/feature/feature-3.jpg">
                    <h3>Add New Coach</h3>
                    <a href="/addcoach" class="primary-btn f-btn">Add</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->


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
