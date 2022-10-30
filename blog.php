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
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/revslider.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="css/blogmate.css">

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

                                    <?php
										session_start();
                                    	if(isset($_SESSION['username'])){
											echo ' <div class="login"><a href="logout.php"><span class="hidden-xs">Log Out</span></a>
                                    </div>';
										}
										else{
											echo ' <div class="login"><a href="login.php"><span class="hidden-xs">Log In</span></a>
                                    </div>';	
										}
									?>
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
                            <li class="level0 active"><a href="index.php"><span>Home</span></a></li>
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

                            <li class="level0"><a href="introduce.php"><span>Giới thiệu</span></a></li>
                            <li class="level0"><a href="blog.php"><span>Blog</span></a></li>
                        </ul>
                        <div class="menu_top">
                            <div class="top-cart-contain pull-right">
                                <!-- Top Cart -->
                                <?php
								  $p->cart_list_mini();
								?>
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

        <!-- Main Container -->

        <section class="main-container col2-right-layout bounceInUp animated">
            <div class="main container">
                <div class="row">
                    <div class="col-main col-sm-9">
                        <div class="page-title">
                            <h2>Blog</h2>
                        </div>
                        <div class="blog-wrapper" id="main">
                            <div class="site-content" id="primary">
                                <div role="main" id="content">
                                    <article class="blog_entry clearfix">
                                        <?php
                            	$sql = "SELECT * FROM blog";
								$p->blog_css($sql);
							?>
                                    </article>

                                </div>
                            </div>
                            <div class="pager">
                                <p class="amount"> <strong>4 Item(s)</strong> </p>
                                <div class="limiter">
                                    <label>Show</label>
                                    <select onchange="setLocation(this.value)">
                                        <option selected="selected" value="#"> 5 </option>
                                        <option value="#"> 10 </option>
                                        <option value="#"> 15 </option>
                                        <option value="#"> 20 </option>
                                        <option value="#"> All </option>
                                    </select>
                                    per page
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-right sidebar col-sm-3">
                        <div role="complementary" class="widget_wrapper13" id="secondary">
                            <div class="popular-posts widget widget__sidebar" id="recent-posts-4">
                                <h3 class="widget-title">Most Popular Post</h3>
                                <div class="widget-content">
                                    <ul class="posts-list unstyled clearfix">
                                        <li>
                                            <figure class="featured-thumb"> <a href="blog_detail.php"> <img width="80"
                                                        height="53" alt="blog image" src="images/blog-img1.jpg"> </a>
                                            </figure>
                                            <!--featured-thumb-->
                                            <h4><a title="Pellentesque posuere" href="blog_detail.php">Pellentesque
                                                    posuere</a></h4>
                                            <p class="post-meta"><i class="icon-calendar"></i>
                                                <time datetime="2014-07-10T07:09:31+00:00" class="entry-date">Jul 10,
                                                    2014</time>
                                                .
                                            </p>
                                        </li>
                                        <li>
                                            <figure class="featured-thumb"> <a href="blog_detail.php"> <img width="80"
                                                        height="53" alt="blog image" src="images/blog-img2.jpg"> </a>
                                            </figure>
                                            <!--featured-thumb-->
                                            <h4><a title="Dolor lorem ipsum" href="blog_detail.php">Dolor lorem
                                                    ipsum</a></h4>
                                            <p class="post-meta"><i class="icon-calendar"></i>
                                                <time datetime="2014-07-10T07:01:18+00:00" class="entry-date">Jul 10,
                                                    2014</time>
                                                .
                                            </p>
                                        </li>
                                        <li>
                                            <figure class="featured-thumb"> <a href="blog_detail.php"> <img width="80"
                                                        height="53" alt="blog image" src="images/blog-img3.jpg"> </a>
                                            </figure>
                                            <!--featured-thumb-->
                                            <h4><a title="Aliquam eget sapien placerat" href="blog_detail.php">Aliquam
                                                    eget sapien
                                                    placerat</a></h4>
                                            <p class="post-meta"><i class="icon-calendar"></i>
                                                <time datetime="2014-07-10T06:59:14+00:00" class="entry-date">Jul 10,
                                                    2014</time>
                                                .
                                            </p>
                                        </li>
                                        <li>
                                            <figure class="featured-thumb"> <a href="blog_detail.php"> <img width="80"
                                                        height="53" alt="blog image" src="images/blog-img4.jpg"> </a>
                                            </figure>
                                            <!--featured-thumb-->
                                            <h4><a title="Pellentesque habitant morbi"
                                                    href="blog_detail.php">Pellentesque habitant morbi</a>
                                            </h4>
                                            <p class="post-meta"><i class="icon-calendar"></i>
                                                <time datetime="2014-07-10T06:53:43+00:00" class="entry-date">Jul 10,
                                                    2014</time>
                                                .
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <!--widget-content-->
                            </div>
                            <div class="popular-posts widget widget_categories" id="categories-2">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li class="cat-item cat-item-19599"><a href="#">First Category</a></li>
                                    <li class="cat-item cat-item-19599"><a href="#">Second Category</a></li>
                                </ul>
                            </div>
                            <!-- Banner Ad Block -->
                            <div class="ad-spots widget widget__sidebar">
                                <h3 class="widget-title">Ad Spots</h3>
                                <div class="widget-content"><a target="_self" href="#" title=""><img alt="offer banner"
                                            src="images/offer-banner1.jpg"></a></div>
                            </div>
                            <!-- Banner Text Block -->
                            <div class="text-widget widget widget__sidebar">
                                <h3 class="widget-title">Text Widget</h3>
                                <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque
                                    cursus. Praesent
                                    nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                                    <br>
                                    Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada
                                    pharetra. Nulla
                                    neque sapien, sollicitudin non ornare quis, malesuada.
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- Main Container End -->
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
                        <div class="col last offer"><strong>New Collection</strong> Lorem ipsum.</div>
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
                    <li> <a href="product_detail.php">Product Detail</a></li>
                    <li> <a href="shopping_cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a>

                    </li>
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
                            <li><a href="blog_detail.php">Blog Detail</a></li>
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
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>