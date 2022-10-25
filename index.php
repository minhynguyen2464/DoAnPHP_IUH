<?php 
	include ("class/admin.php");
	$p = new admin();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico"
        type="image/x-icon" />
    <title>Classic premium HTML5 &amp; CSS3 template</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/revslider.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
    <div id="page">
        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <!-- Header Logo -->
                            <div class="logo"><a title="Magento Commerce" href="index.php"><img alt="Magento Commerce"
                                        src="images/logo.png"></a></div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-lg-9 col-xs-12 right_menu">
                            <div class="toplinks">
                                <!-- Default Welcome Message -->
                                <div class="welcome-msg hidden-xs">Default welcome msg! </div>
                                <!-- End Default Welcome Message -->
                                <div class="links">
                                    <div class="myaccount"><a title="My Account" href="login.php"><span
                                                class="hidden-xs">My
                                                Account</span></a></div>
                                    <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span
                                                class="hidden-xs">Wishlist</span></a></div>
                                    <div class="check"><a title="Checkout" href="checkout.html"><span
                                                class="hidden-xs">Checkout</span></a></div>
                                    <div class="demo"><a title="Blog" href="blog.html"><span
                                                class="hidden-xs">Blog</span></a></div>
                                    <!-- Header Company -->
                                    <div class="dropdown block-company-wrapper hidden-xs"><a role="button"
                                            data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle"
                                            href="#">Company <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="about_us.html">About Us</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Customer
                                                    Service</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Privacy
                                                    Policy</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="sitemap.html">Site Map</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search
                                                    Terms</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Advanced
                                                    Search</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Header Company -->

                                    <div class="login"><a href="login.php"><span class="hidden-xs">Log In</span></a>
                                    </div>
                                </div>
                                <!-- links -->
                            </div>

                            <!-- Search-col -->
                            <div class="search-box pull-right">
                                <form
                                    action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_1/cat"
                                    method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Search entire store here..." value="Search"
                                        maxlength="70" name="search" id="search">
                                    <button type="button" class="search-btn-bg"><span
                                            class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                            </div>
                            <!-- End Search-col -->
                            <!-- Header Language -->
                            <div class="lang-curr">
                                <div class="form-language">
                                    <ul class="lang">
                                        <li class=""><a href="#" title="English"><img src="images/english.png"
                                                    alt="English" />
                                                <span>English</span></a></li>
                                        <li class=""><a href="#" title="Francais"><img src="images/francais.png"
                                                    alt="Francais" />
                                                <span>francais</span></a></li>
                                        <li class=""><a href="#" title="German"><img src="images/german.png"
                                                    alt="German" />
                                                <span>german</span></a></li>
                                    </ul>
                                </div>
                                <div class="form-currency">
                                    <ul class="currencies_list">
                                        <li class=""><a class="" title="Dollar" href="#">$</a></li>
                                        <li class=""><a class="" title="Euro" href="#">&euro;</a></li>
                                        <li class=""><a class="" title="Pound" href="#">&pound;</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- End Header Currency -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
        </div>
        <!-- Navbar -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="nav-inner col-lg-12">
                        <ul id="nav" class="hidden-xs">
                            <li class="level0 parent drop-menu active"><a href="index.php"><span>Home</span></a>
                                <ul class="level1">
                                    <li class="level1 first parent"><a href="index.php"><span>Home Version 1</span></a>
                                    </li>
                                    <li class="level1 parent"><a href="../version_2/index.html"><span>Home Version
                                                2</span></a></li>
                                    <li class="level1 parent"><a href="../version_3/index.html"><span>Home Version
                                                3</span></a></li>

                                </ul>
                            </li>
                            <li class="level0 parent drop-menu"><a href="#"><span>Pages</span></a>
                                <ul class="level1">
                                    <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                                    <li class="level1 nav-10-2"><a href="list.html"><span>List</span></a></li>
                                    <li class="level1 nav-10-3"><a href="product_detail.html"><span>Product
                                                Detail</span></a></li>
                                    <li class="level1 nav-10-4"><a href="shopping_cart.html"><span>Shopping
                                                Cart</span></a></li>
                                    <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                                    </li>
                                    <li class="level1 nav-10-4"><a href="wishlist.html"><span>Wishlist</span></a></li>
                                    <li class="level1"><a href="dashboard.html"><span>Dashboard</span></a></li>
                                    <li class="level1"><a href="multiple_addresses.html"><span>Multiple
                                                Addresses</span></a></li>
                                    <li class="level1"><a href="about_us.html"><span>About us</span></a></li>
                                    <li class="level1"><a href="compare.html"><span>Compare</span></a></li>

                                    <li class="level1"><a href="faq.html"><span>FAQ</span></a></li>
                                    <li class="level1"><a href="quick_view.html"><span>Quick view </span></a></li>
                                    <li class="level1"><a href="login.php"><span>Login</span></a></li>

                                    <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                                        <ul class="level2 right-sub">
                                            <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog
                                                        Detail</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1"><a href="contact_us.html"><span>Contact us</span></a></li>
                                    <li class="level1"><a href="404error.html"><span>404 Error Page</span></a></li>
                                </ul>
                            </li>
                            <li class="level0 parent drop-menu"><a href="#"><span>Nam</span></a>
                                <ul class="level1">
                                    <li class="level1 first"><a href="men_adidas.php"><span>Giày Adidas</span></a></li>
                                    <li class="level1 nav-10-2"><a href="men_nike.php"><span>Giày Nike</span></a></li>
                                    <li class="level1 nav-10-3"><a href="men_airjordan.php"><span>Giày Air
                                                Jordan</span></a></li>
                                </ul>
                            </li>
                            <li class="level0 parent drop-menu"><a href="#"><span>Nữ</span></a>
                                <ul class="level1">
                                    <li class="level1 first"><a href="women_adidas.php"><span>Giày Adidas</span></a>
                                    </li>
                                    <li class="level1 nav-10-2"><a href="women_nike.php"><span>Giày Nike</span></a></li>
                                    <li class="level1 nav-10-3"><a href="women_airjordan.php"><span>Giày Air
                                                Jordan</span></a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu_top">
                            <div class="top-cart-contain pull-right">
                                <!-- Top Cart -->
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a
                                            href="#"><span class="hidden-xs">Shopping Cart (2)</span></a></div>
                                    <div>
                                        <div class="top-cart-content" style="display: none;">
                                            <div class="block-subtitle">
                                                <div class="top-subtotal">2 items, <span class="price">$259.99</span>
                                                </div>
                                                <!--top-subtotal-->
                                                <div class="pull-right">
                                                    <button title="View Cart" class="view-cart" type="button"><span>View
                                                            Cart</span></button>
                                                </div>
                                                <!--pull-right-->
                                            </div>
                                            <!--block-subtitle-->
                                            <ul class="mini-products-list" id="cart-sidebar">
                                                <li class="item first">
                                                    <div class="item-inner"><a class="product-image"
                                                            title="Sample Product" href="#l"><img alt="Sample Product"
                                                                src="products-images/product4.jpg"></a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="btn-remove1"
                                                                    title="Remove This Item" href="#">Remove</a> <a
                                                                    class="btn-edit" title="Edit item" href="#"><i
                                                                        class="icon-pencil"></i><span
                                                                        class="hidden">Edit item</span></a> </div>
                                                            <!--access--> <strong>1</strong> x <span
                                                                class="price">$179.99</span>
                                                            <p class="product-name"><a href="product_detail.html">Sample
                                                                    Product</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item last">
                                                    <div class="item-inner"><a class="product-image"
                                                            title="Sample Product" href="#"><img alt="Sample Product"
                                                                src="products-images/product3.jpg"></a>
                                                        <div class="product-details">
                                                            <div class="access"><a class="btn-remove1"
                                                                    title="Remove This Item" href="#">Remove</a> <a
                                                                    class="btn-edit" title="Edit item" href="#"><i
                                                                        class="icon-pencil"></i><span
                                                                        class="hidden">Edit item</span></a> </div>
                                                            <!--access--> <strong>1</strong> x <span
                                                                class="price">$80.00</span>
                                                            <p class="product-name"><a href="product_detail.html">Sample
                                                                    Product</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="actions">
                                                <button class="btn-checkout" title="Checkout"
                                                    type="button"><span>Checkout</span></button>
                                            </div>
                                            <!--actions-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Top Cart -->
                                <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                    <input value="" type="hidden">
                                    <input id="enable_module" value="1" type="hidden">
                                    <input class="effect_to_cart" value="1" type="hidden">
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav -->
        <!-- Slider -->
        <div id="magik-slideshow" class="magik-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                    <ul>
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                            data-thumb='images/slide-img1.jpg'>
                            <img src='images/slide-img1.jpg' alt="slide-img" data-bgposition='left top'
                                data-bgfit='cover' data-bgrepeat='no-repeat' />
                            <div class="info">
                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='860' data-y='60'
                                    data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>New Season
                                </div>
                                <div class='tp-caption line' data-x='860' data-y='120' data-endspeed='500'
                                    data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none'
                                    data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>&nbsp;</div>
                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='860' data-y='140'
                                    data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Summer Sale
                                </div>
                                <div class='tp-caption sfb  tp-resizeme ' data-x='860' data-y='330' data-endspeed='500'
                                    data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                    data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#'
                                        class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                                <div class='tp-caption Title sft  tp-resizeme ' data-x='860' data-y='220'
                                    data-endspeed='500' data-speed='500' data-start='1500'
                                    data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                    data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna,
                                    nunc, tincidunt,
                                    augue,<br>
                                    augue facilisis facilisis.</div>
                                <div class='tp-caption Title sft  tp-resizeme small-size ' data-x='860' data-y='370'
                                    data-endspeed='500' data-speed='500' data-start='1500'
                                    data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                    data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum
                                    dolor sit amet,
                                    consectetur elit.</div>
                            </div>
                        </li>
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                            data-thumb='images/slide-img2.jpg'>
                            <img src='images/slide-img2.jpg' alt="slide" data-bgposition='left top' data-bgfit='cover'
                                data-bgrepeat='no-repeat' />
                            <div class="info">
                                <div class='tp-caption ExtraLargeTitle sft tp-resizeme ' data-x='395' data-y='60'
                                    data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone'
                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>NEW ARRIVALS
                                </div>
                                <div class='tp-caption line' data-x='395' data-y='120' data-endspeed='500'
                                    data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none'
                                    data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>&nbsp;</div>
                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='395' data-y='140'
                                    data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone'
                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                    data-endelementdelay='0.1'
                                    style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem a Cosmo
                                </div>
                                <div class='tp-caption Title1 sft tp-resizeme' data-x='395' data-y='220'
                                    data-endspeed='500' data-speed='500' data-start='1500'
                                    data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                    data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna,
                                    nunc, tincidunt,
                                    augue,<br>
                                    augue facilisis facilisis.</div>
                                <div class='tp-caption sfb  tp-resizeme ' data-x='395' data-y='330' data-endspeed='500'
                                    data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none'
                                    data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#'
                                        class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                                <div class='tp-caption Title sft  tp-resizeme ' data-x='395' data-y='370'
                                    data-endspeed='500' data-speed='500' data-start='1500'
                                    data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                                    data-elementdelay='0.1' data-endelementdelay='0.1'
                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;font-size:11px'>
                                    Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit.</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end banner -->
        <div class="top-banner-section wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner1">
                            <div class="top-b-text"><strong>Designer Shoes</strong> For Women</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col add-banner2">
                            <div class="top-b-text"><strong>Luxury Handbags</strong>2015 New Arrive</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col last offer"><strong>New Collection</strong> Lorem ipsum dolor.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main container -->
        <div class="main-col">
            <div class="container">
                <div class="row">
                    <div class="product-grid-view">
                        <div class="col-md-12">
                            <div class="std">
                                <div class="home-tabs wow bounceInUp animated">
                                    <div class="producttabs">
                                        <div id="magik_producttabs1" class="magik-producttabs">
                                            <!--<h3></h3>-->
                                            <div class="magik-pdt-container">
                                                <!--Begin Tab Nav -->
                                                <div class="magik-pdt-nav">
                                                    <ul class="pdt-nav">
                                                        <li class="item-nav tab-loaded tab-nav-actived"
                                                            data-type="order" data-catid="" data-orderby="best_sales"
                                                            data-href="pdt_best_sales"><span class="title-navi">Best
                                                                Seller</span></li>
                                                        <li class="item-nav" data-type="order" data-catid=""
                                                            data-orderby="new_arrivals" data-href="pdt_new_arrivals">
                                                            <span class="title-navi">New Arrivals</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- End Tab Nav -->
                                                <!--Begin Tab Content -->
                                                <div class="magik-pdt-content wide-5">
                                                    <div
                                                        class="pdt-content is-loaded pdt_best_sales tab-content-actived">
                                                        <ul class="pdt-list products-grid-home zoomOut play">
                                                            <?php
                              	$sql = "SELECT * FROM products LIMIT 8";
								$p->index_page_list($sql);
							  ?>

                                                        </ul>
                                                    </div>
                                                    <div class="pdt-content pdt_new_arrivals is-loaded">
                                                        <ul class="pdt-list products-grid-home zoomOut play">
                                                            <?php
                              	$sql = "SELECT * FROM products ORDER BY add_date desc LIMIT 8";
								$p->index_page_list($sql);
							  ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main container -->
        <!-- Featured Slider -->
        <section class="featured-pro container wow bounceInUp animated">
            <div class="slider-items-products">
                <div class="new_title center">
                    <h2>Featured Products</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        <?php
            	$sql = "SELECT * FROM products where comp_id=1 ORDER BY price desc LIMIT 6";
				$p->index_page_list_featured($sql);
			?>



                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Slider -->
        <!--Offer Start-->
        <div class="offer-slider wow animated parallax parallax-2">
            <div class="container">
                <ul class="bxslider">
                    <li>
                        <h2>NEW ARRIVALS</h2>
                        <h1>Sale up to 30% off</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                            lacus. Fusce
                            condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer
                            sed arcu
                            massa. </p>
                        <a class="shop-now" href="#">Shop now</a>
                    </li>
                    <li>
                        <h2>Hello hotness!</h2>
                        <h1>Summer collection</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                            lacus. Fusce
                            condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer
                            sed arcu
                            massa. </p>
                        <a class="shop-now" href="#">View More</a>
                    </li>
                    <li>
                        <h2>New launch</h2>
                        <h1>Designer dresses on sale</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                            lacus. Fusce
                            condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer
                            sed arcu
                            massa. </p>
                        <a class="shop-now" href="#">Learn More</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Offer silder End-->

        <!-- Latest Blog -->
        <section class="latest-blog wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="new_title center">
                        <h2>Latest Blog</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="blog_inner">
                            <div class="blog-img"> <img src="images/blog-img1.jpg" alt="Blog image">
                                <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
                            </div>
                            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
                            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Fusce sit
                                ... </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="blog_inner">
                            <div class="blog-img"> <img src="images/blog-img2.jpg" alt="Blog image">
                                <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
                            </div>
                            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
                            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Fusce sit
                                ... </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="blog_inner">
                            <div class="blog-img"> <img src="images/blog-img3.jpg" alt="Blog image">
                                <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
                            </div>
                            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
                            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Fusce sit
                                ... </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="blog_inner">
                            <div class="blog-img"> <img src="images/blog-img4.jpg" alt="Blog image">
                                <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
                            </div>
                            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
                            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Fusce sit
                                ... </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Blog -->

        <!-- offer banner section -->

        <div class="offer-banner-section wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col"><img src="images/promo-banner-img1.png" alt="offer banner1"></div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col"><img src="images/promo-banner-img2.png" alt="offer banner2"></div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col"><img src="images/promo-banner-img3.png" alt="offer banner3"></div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="col last"><img src="images/promo-banner-img4.png" alt="offer banner4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner section -->
        <div class="brand-logo">
            <div class="container">
                <div class="slider-items-products">
                    <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col6">

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
                            <!-- End Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <section class="footer-navbar">
                <div class="footer-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <div class="footer-column pull-left collapsed-block">
                                    <h4>Shopping Guide<a class="expander visible-xs" href="#TabBlock-1">+</a></h4>
                                    <div class="tabBlock" id="TabBlock-1">
                                        <ul class="links">
                                            <li class="first"><a href="#" title="How to buy">How to buy</a></li>
                                            <li><a href="faq.html" title="FAQs">FAQs</a></li>
                                            <li><a href="#" title="Payment">Payment</a></li>
                                            <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
                                            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                                            <li class="last"><a href="#" title="Return policy">Return policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-column pull-left collapsed-block">
                                    <h4>Style Advisor<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                                    <div class="tabBlock" id="TabBlock-2">
                                        <ul class="links">
                                            <li class="first"><a title="Your Account" href="login.php">Your Account</a>
                                            </li>
                                            <li><a title="Information" href="#">Information</a></li>
                                            <li><a title="Addresses" href="#">Addresses</a></li>
                                            <li><a title="Addresses" href="#">Discount</a></li>
                                            <li><a title="Orders History" href="#">Orders History</a></li>
                                            <li class="last"><a title=" Additional Information" href="#">Additional
                                                    Information</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-column pull-left collapsed-block">
                                    <h4>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                                    <div class="tabBlock" id="TabBlock-3">
                                        <ul class="links">
                                            <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
                                            <li><a href="#" title="Search Terms">Search Terms</a></li>
                                            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                                            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                                            <li><a href="#" title="Suppliers">Suppliers</a></li>
                                            <li class=" last"><a href="#" title="Our stores" class="link-rss">Our
                                                    stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-4">
                                <div class="footer-column-last">
                                    <div class="newsletter-wrap collapsed-block">
                                        <h4>Sign up for emails<a class="expander visible-xs" href="#TabBlock-4">+</a>
                                        </h4>
                                        <div class="tabBlock" id="TabBlock-4">
                                            <form id="newsletter-validate-detail" method="post" action="#">
                                                <div id="container_form_news">
                                                    <div id="container_form_news2">
                                                        <input type="text"
                                                            class="input-text required-entry validate-email"
                                                            value="Enter your email address" onfocus=" this.value='' "
                                                            title="Sign up for our newsletter" id="newsletter"
                                                            name="email">
                                                        <button class="button subscribe" title="Subscribe"
                                                            type="submit"><span>Subscribe</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <h4>Follow Us</h4>
                                        <ul class="link">
                                            <li class="fb pull-left"><a href="#"></a></li>
                                            <li class="tw pull-left"><a href="#"></a></li>
                                            <li class="googleplus pull-left"><a href="#"></a></li>
                                            <li class="rss pull-left"><a href="#"></a></li>
                                            <li class="pintrest pull-left"><a href="#"></a></li>
                                            <li class="linkedin pull-left"><a href="#"></a></li>
                                            <li class="youtube pull-left"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div style="text-align:center"><a href="index.php"><img src="images/footer-logo.png"
                                        alt="footer-logo"></a></div>
                            <address>
                                <i class="icon-location-arrow"></i> 123 Main Street, Anytown, CA 12345 USA <i
                                    class="icon-mobile-phone"></i><span> +(408) 394-7557</span> <i
                                    class="icon-envelope"></i><a
                                    href="mailto:support@magikcommerce.com">support@magikcommerce.com</a>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. All Rights Reserved.
                            </div>
                            <div class="col-sm-7 col-xs-12 company-links">
                                <ul class="links">
                                    <li><a title="Magento Themes" href="#">Magento Themes</a></li>
                                    <li><a title="Premium Themes" href="#">Premium Themes</a></li>
                                    <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
                                    <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <div id="mobile-menu">
        <div class="mm-search">
            <form name="search">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button class="btn-default" type="submit"><i class="icon-search"></i></button>
                    </div>
                    <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                        id="srch-term">
                </div>
            </form>
        </div>
        <ul>
            <li> </li>
            <li>
                <div class="home"><a href="index.php"><i class="icon-home"></i>Home</a> </div>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="grid.html">Grid</a></li>
                    <li> <a href="list.html">List</a></li>
                    <li> <a href="product_detail.html">Product Detail</a></li>
                    <li> <a href="shopping_cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li> <a href="wishlist.html">Wishlist</a></li>
                    <li> <a href="dashboard.html">Dashboard</a></li>
                    <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
                    <li> <a href="about_us.html">About us</a></li>
                    <li><a href="compare.html">Compare</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="quick_view.html">Quick view</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog_detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="404error.html">404 Error Page</a></li>
                </ul>
            </li>
            <li><a href="grid.html">Women</a>
                <ul>
                    <li> <a href="grid.html" class="">Stylish Bag</a>
                        <ul>
                            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
                            <li> <a href="grid.html" class="">Diaper Bags</a></li>
                            <li> <a href="grid.html" class="">Bags</a></li>
                            <li> <a href="grid.html" class="">Hobo handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Material Bag</a>
                        <ul>
                            <li> <a href="grid.html">Beaded Handbags</a></li>
                            <li> <a href="grid.html">Fabric Handbags</a></li>
                            <li> <a href="grid.html">Handbags</a></li>
                            <li> <a href="grid.html">Leather Handbags</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Shoes</a>
                        <ul>
                            <li> <a href="grid.html">Flat Shoes</a></li>
                            <li> <a href="grid.html">Flat Sandals</a></li>
                            <li> <a href="grid.html">Boots</a></li>
                            <li> <a href="grid.html">Heels</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Jwellery</a>
                        <ul>
                            <li> <a href="grid.html">Bracelets</a></li>
                            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
                            <li> <a href="grid.html">Pendants</a></li>
                            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Dresses</a>
                        <ul>
                            <li> <a href="grid.html">Casual Dresses</a></li>
                            <li> <a href="grid.html">Evening</a></li>
                            <li> <a href="grid.html">Designer</a></li>
                            <li> <a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Swimwear</a>
                        <ul>
                            <li> <a href="grid.html">Swimsuits</a></li>
                            <li> <a href="grid.html">Beach Clothing</a></li>
                            <li> <a href="grid.html">Clothing</a></li>
                            <li> <a href="grid.html">Bikinis</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Men</a>
                <ul>
                    <li> <a href="grid.html" class="">Shoes</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Dresses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Jackets</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
                        </ul>
                    </li>
                    <li> <a href="#.html">Watches</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
                        </ul>
                    </li>
                    <li> <a href="#/sunglasses.html">Sunglasses</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Accesories</a>
                        <ul class="level1">
                            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
                            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Electronics</a>
                <ul>
                    <li> <a href="grid.html"><span>Mobiles</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Samsung</span></a></li>
                            <li> <a href="grid.html"><span>Nokia</span></a></li>
                            <li> <a href="grid.html"><span>IPhone</span></a></li>
                            <li> <a href="grid.html"><span>Sony</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html" class=""><span>Accesories</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
                            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
                            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
                            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Cameras</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Camcorders</span></a></li>
                            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
                            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
                            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
                            <li> <a href="grid.html"><span>IPods</span></a></li>
                            <li> <a href="grid.html"><span>Speakers</span></a></li>
                            <li> <a href="grid.html"><span>Video Players</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Computer</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
                            <li> <a href="grid.html"><span>Pendrives</span></a></li>
                            <li> <a href="grid.html"><span>Headphones</span></a></li>
                            <li> <a href="grid.html"><span>PC Components</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html"><span>Appliances</span></a>
                        <ul>
                            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
                            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
                            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
                            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Furniture</a>
                <ul>
                    <li> <a href="grid.html">Living Room</a>
                        <ul>
                            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
                            <li> <a href="grid.html">Sofas</a></li>
                            <li> <a href="grid.html">Chairs</a></li>
                            <li> <a href="grid.html">Tables</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html" class="">Dining &amp; Bar</a>
                        <ul>
                            <li> <a href="grid.html">Dining Table Sets</a></li>
                            <li> <a href="grid.html">Serving Trolleys</a></li>
                            <li> <a href="grid.html">Bar Counters</a></li>
                            <li> <a href="grid.html">Dining Cabinets</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Bedroom</a>
                        <ul>
                            <li> <a href="grid.html">Beds</a></li>
                            <li> <a href="grid.html">Chest of Drawers</a></li>
                            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
                            <li> <a href="grid.html">Nightstands</a></li>
                        </ul>
                    </li>
                    <li> <a href="grid.html">Kitchen</a>
                        <ul>
                            <li> <a href="grid.html">Kitchen Racks</a></li>
                            <li> <a href="grid.html">Kitchen Fillings</a></li>
                            <li> <a href="grid.html">Wall Units</a></li>
                            <li> <a href="grid.html">Benches &amp; Stools</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="grid.html">Kids</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
    </div>

    <!-- End Footer -->
    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/revslider.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type='text/javascript'>
    jQuery(document).ready(function() {
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 1920,
            startheight: 650,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
    </script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>