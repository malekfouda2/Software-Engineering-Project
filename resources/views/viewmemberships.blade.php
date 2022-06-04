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
    <title>Hulk || View Memberships</title>

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
<div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-2.jpg">
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr style="background-color: white;">
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Membership Begin</th>
                    <th scope="col">Membership End</th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr class="table-primary">
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->type}}</td>
                        <td>{{$member->start_date}}</td>
                        <td>{{$member->finish_date}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="/addmembership" class="primary-btn f-btn">Add membership</a>
        </div>
    </div>
</div>

</section>
<!-- Hero End -->

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
