﻿<?php 
	include ("class/admin.php");
	$p = new admin();
	if(isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];	
	}
	else{
		$user_id=0;	
	}
	 		//Khi nhấn vào nút thêm vào giỏ hàng thì thực hiện add vào
        	if(isset($_REQUEST['btn_add'])){
				if(isset($_SESSION['username'])){
					$con = $p->connect();
					$qty = $_REQUEST['qty'];
					$id = $_REQUEST['id'];
					$pro_id = $id;
					$user_id = $_SESSION['user_id'];
					//Xử lý subtotal
					$sub_sql = "SELECT price from products WHERE pro_id='$pro_id'";
					$result = $con->query($sub_sql);
					$rows=$result->fetch_assoc();
					$subtotal=$qty*$rows['price'];
					$price=$rows['price'];
					//Nếu như thêm sản phẩm trùng
					$select_user_cart = "SELECT pro_id FROM orders WHERE user_id = '$user_id' AND pro_id='$pro_id'";
					$sub_result = $con->query($select_user_cart);
					if($sub_result->num_rows>0){
						$sub_rows=$sub_result->fetch_assoc();
						$sub_pro_id = $sub_rows['pro_id'];
						$sql2="UPDATE orders SET qty=qty+'$qty', subtotal=$price*qty WHERE pro_id='$sub_pro_id' AND user_id='$user_id'";
						$p->product_modify($sql2);
					}
					else{
						$sql2="INSERT INTO orders (pro_id,user_id,qty,subtotal) VALUES ('$pro_id','$user_id','$qty','$subtotal')";
              	 	  	$p->product_modify($sql2);
					}
					//End of function
					 header('Location: product_detail.php?id='.$id.'');
				}
				else{
					header('Location: login.php');	
				}
			}
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
    <title>Chi tiết sản phẩm</title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/revslider.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
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
                                <div class="welcome-msg hidden-xs">Xin chào <?php $p->get_username()?> !</div>
                                <!-- End Default Welcome Message -->
                                <div class="links">
                                    <div class="myaccount"><a title="My Account" href="
									<?php echo('account-info.php?userid='.$user_id.'')?>"><span class="hidden-xs">My
                                                Account</span></a></div>
                                    <div class="check"><a title="Checkout"
                                            href="<?php echo('shopping_cart.php?userid='.$user_id.'')?>"><span
                                                class="hidden-xs">Checkout</span></a></div>
                                    <div class="demo"><a title="Blog" href="blog.php"><span
                                                class="hidden-xs">Blog</span></a></div>

                                    <?php
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
                            <div class="search-box pull-right" style="position: relative;">
                                <form action="" method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Search entire store here..." maxlength="70" name="search" id="search">
                                    <button type="submit" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        // Retrieve the search query
                                        $search_query = $_POST['search'];
                                        
                                        // Now you can process the search query as needed
                                        // For example, you can perform a search in your database using the $search_query
                                        $result = $p->searchProducts($search_query);
                                        // Display the search query
                                    }
                                ?>
                            </div>
                            <!-- End Search-col -->

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
        <!-- Breadcrumbs -->
        <div class="breadcrumbs bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>» </span></li>
                            <li class=""> <a title="Go to Home Page" href="grid.html">Women</a><span>» </span></li>
                            <li class="category13"><strong><?php $p->get_name_value()?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Main Container -->
        <div class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="row">
                        <div class="product-view">
                            <div class="product-essential">
                                <form action="#" method="post" id="product_addtocart_form">
                                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                    <?php
										$pro_id = $_GET['id'];
										$sql = "SELECT * FROM products WHERE pro_id=$pro_id";
										$p->product_detail_css_1($sql);
									  ?>


                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <label for="qty">Qty:</label>
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <form method="post">
                                                        <button
                                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="icon-plus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1"
                                                            maxlength="12" id="qty" name="qty">

                                                        <button
                                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="icon-minus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <?php
											$id = $_REQUEST['id'];
                                        	if($p->check_instock($id)){
												echo ' <button onclick="productAddToCartForm.submit(this)" class="button btn-cart"
                                                title="Add to Cart" type="submit" name="btn_add"><span><i
                                                        class="icon-basket"></i> Thêm vào giỏ hàng</span></button>';	
											}
											else{
												echo '<button onclick="productAddToCartForm.submit(this)" class="button btn-cart"
                                                title="Add to Cart" type="submit" disabled name="btn_add" style="background:gray"><span><i
                                                        class="icon-basket"></i> Thêm vào giỏ hàng</span></button>';	
											}
										?>

                                </form>
                            </div>

                        </div>
                    </div>

                    </form>
                </div>
                <?php
        	 	$pro_id = $_GET['id'];
              	$sql = "SELECT * FROM products WHERE pro_id=$pro_id";
				$p->product_detail_css_2($sql);
		  ?>
                <div class="related-slider col-lg-12 col-xs-12 bounceInDown animated">
                    <div class="slider-items-products">
                        <div class="slider-items-products">
                            <div class="new_title center">
                                <h2>Sản Phẩm Liên Quan</h2>
                            </div>

                            <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">

                                    <!-- Item -->
                                    <?php
													$p->product_detail_css_3();
												?>
                                    <!-- End Item -->


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

    <!-- Main Container End -->


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
                                                    <input type="text" class="input-text required-entry validate-email"
                                                        value="Enter your email address" onfocus=" this.value='' "
                                                        title="Sign up for our newsletter" id="newsletter" name="email">
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
    <script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>