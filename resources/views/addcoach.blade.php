<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hulk Gym">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>Hulk || Add Coach</title>

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

<body style="background-color: #151515;">
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
@include('navbar')
<!-- Header End -->

<section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Add Coach</h2>
                    <div class="breadcrumb-controls">
                        <a href="admin-panel.html"><i class="fa fa-home"></i> Home</a>
                        <span>Add Coach</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-1">
                <div class="contact-form">
                    <h4>Fill the form!</h4>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="full_name" style="color: white;">
                                    Full Name
                                </label>
                                <input type="text" placeholder="Full Name" name="full_name">
                            </div>
                            <div class="col-lg-6">
                                <label for="email" style="color: white;">
                                    Email
                                </label>
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="password" style="color: white;">
                                    Password
                                </label>
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone_number" style="color: white;">
                                    Phone Number
                                </label>
                                <input type="text" placeholder="Phone Number" name="phone_number">
                            </div>
                            <div class="col-lg-6">
                                <label for="age" style="color: white;">
                                    Age
                                </label>
                                <input type="number" placeholder="Age" name="age">
                            </div>
                            <div class="col-lg-6">
                                <label for="image" style="color: white;">
                                    Upload Profile Photo
                                </label>
                                <input type="file" name="image" style="padding: 10px;" accept="image/*">
                            </div>
                            <div class="col-lg-12" style="text-align: center;">
                                <button type="submit" class="c-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


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
