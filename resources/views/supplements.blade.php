<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hulk Gym">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>HULK || View Supplements</title>

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

<body style="background-color: #151515">
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
@include('navbar')
<!-- Header End -->

<!-- Hero Section Begin -->

<section class="gallery-section spad">
    <div class="container">
        <div class="row gallery-filter">
            @foreach($supplements as $supplement)
                <div class="col-lg-4 col-sm-6 mix crossfit workout">
                    <div class="gallery-item">
                        <img src="{{$supplement->image}}" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <h6>{{$supplement->name}}<br><br>Price: {{$supplement->price}} EGP</h6>
                                <h6>{{$supplement->description}}</h6>
                                <br>
                                @if(Auth::user()->type == '1')
                                    <a href="/editsupplement/{{$supplement->id}}"><i class="fa fa-pencil"></i></a>
                                    <a href="/deletesupplement/{{$supplement->id}}"><i class="fa fa-trash-o"></i></a>
                                @else
                                    <a href="{{$supplement->image}}" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                    <a href="/addsupplement/{{$supplement->id}}"><i class="fa fa-plus"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
