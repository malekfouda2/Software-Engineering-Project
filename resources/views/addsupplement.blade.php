<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hulk Gym">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/icons/chose-icon-4.png"/>
    <title>Hulk || Add Supplement</title>

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
                    <h2>Add Supplement</h2>
                    <div class="breadcrumb-controls">
                        <a href="admin-panel.html"><i class="fa fa-home"></i> Home</a>
                        <span>Add Supplement</span>
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
                    @if(session('addmessage'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{session('addmessage')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if($errors->first('protein_name') != "")
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error in the name field.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->first('protein_description') != "")
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error in the description field.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->first('protein_price') != "")
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error in the price field.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->first('image') != "")
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error in the image field.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="full_name" style="color: white;">
                                    Protein Name
                                </label>
                                <input type="text" placeholder="Name" name="protein_name" value="{{old('protein_name')}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="desc" style="color: white;">
                                    Protein Description
                                </label>
                                <input type="text" placeholder="Description" name="protein_description" value="{{old('protein_description')}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="price" style="color: white;">
                                    Price
                                </label>
                                <input type="text" placeholder="Price" name="protein_price" value="{{old('protein_price')}}">
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
