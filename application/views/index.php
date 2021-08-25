<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Mini Market - Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo css_loader('bootstrap.min.css');?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo css_loader('style.css');?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo css_loader('responsive.css');?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo img_loader('fevicon.png');?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo css_loader('jquery.mCustomScrollbar.min.css');?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo css_loader('owl.carousel.min.css');?>">
    <link rel="stylesoeet" href="<?php echo css_loader('owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- banner bg main start -->
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">
                            <ul>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">New Releases</a></li>
                                <li><a href="#">Today's Deals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo img_loader('logo.png');?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Accueil</a>
                        <a href="divers.html">Divers</a>
                        <a href="Boissons.html">Boissons</a>
                        <a href="Legumes.html">Légumes</a>
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img src="<?php echo img_loader('toggle-icon.png');?>"></span>

                    <div class="main">
                        <!-- Another variation with a button -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher dans le site...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                            </div>
                        </div>
                    </div>
                    <div class="header_box">
                        <div class="login_menu">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="padding_10">Cart</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">Cart</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Commencez à acheter des articles dans <br>Votre shopping préférer</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Découvrez plusieurs articles intéréssantes <br>dans notre boutique</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->
    <!-- fashion section start -->
    
        <?php include($templateFront);?>
        
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo">
                <a href="index.html"><img src="<?php echo img_loader('footer-logo.png');?>"></a>
            </div>
            <div class="input_bt">
                <br>
            </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">New Releases</a></li>
                    <li><a href="#">Today's Deals</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© 2021 All Rights Reserved. Design by ETU1238 - ETU1310</a>
            </p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="<?php echo js_loader('jquery.min.js');?>"></script>
    <script src="<?php echo js_loader('popper.min.js');?>"></script>
    <script src="<?php echo js_loader('bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo js_loader('jquery-3.0.0.min.js');?>"></script>
    <script src="<?php echo js_loader('plugin.js');?>"></script>
    <!-- sidebar -->
    <script src="<?php echo js_loader('jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script src="<?php echo js_loader('custom.js');?>"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>