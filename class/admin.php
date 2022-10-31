<?php
	session_start();
	class admin{	
		//Hàm kiểm tra đăng nhập admin
		function checkInput($username,$password){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			if($username=='admin' && $password=='123456'){
				header('Location: AdminLTE-master/index.php');
			}
 		}
		
		function checkSession(){
			if($_SESSION['username']!='admin' || $_SESSION['password']!='123456'){
				header('Location: login.php');	
			}	
		}
		
		//Hàm chuyển file
		function moveFile($tmp_name, $dir, $name){
			$path = $dir.$name;
			if(move_uploaded_file($tmp_name,$path)){
				echo '<script>alert("Move file sucessfully")</script>';	
			}	
			else{
				echo '<script>alert("Failed")</script>';	
			}
		}
		
		//Database
			//Hàm connect database 
			//Tên db: shoeDatabase
			//usernname: admin
			//password: 123qwe!@#

			/*function connect(){
			$con = new MySQLi('localhost','admin','123qwe!@#','shoeDatabase');	
				if($con->connect_error){
				die('Connection failed: '. $con->connect_error);
				}
			 return $con;
			 }*/

			function connect(){
				//Get Heroku ClearDB connection information
				$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
				$cleardb_server = $cleardb_url["host"];
				$cleardb_username = $cleardb_url["user"];
				$cleardb_password = $cleardb_url["pass"];
				$cleardb_db = substr($cleardb_url["path"],1);
				$active_group = 'default';
				$query_builder = TRUE;
				// Connect to DB
				$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
				return $con;
			}
		
			//Hàm thêm xóa sửa database
			function product_modify($sql){
				$con = $this->connect();
				if(mysqli_query($con,$sql)){
					return 1;
				}	
				else{
					return 0;
				}	
				mysqli_close($con);
			}
			
			//Hàm list các sản phẩm thêm gần đây ở trang AdminLTE-master/index2.php
			function recent_product($sql){
				$con = $this->connect();
				$result = $con->query($sql);
				$dir = '../products-images/';
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						echo '<ul class="products-list product-list-in-box">
							<li class="item">
							  <div class="product-img">
								<img src="'.$dir.$row['image'].'" alt="Product Image">
							  </div>
							  <div class="product-info">
								<a href="javascript:void(0)" class="product-title">'.$row['name'].'
								  <span class="label label-warning pull-right">$'.$row['price'].'</span></a>
									<span class="product-description">
									  '.$row['description'].'.
									</span>
							  </div>
							</li>
						  </ul>';
					}	
				}	
			}
			
			//Hàm list các products ở trang AdminLTE-master/pages/forms/general.php
			function general_list_item($sql){
				$con = $this->connect();
				$result = $con->query($sql);
				$dir = '../../../products-images/';
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '<tr>
							  <td><a href="?id='.$rows['pro_id'].'">'.$rows['pro_id'].'</a></td>
							  <td><a href="?id='.$rows['pro_id'].'">'.$rows['name'].'</a></td>
							  <td><a href="?id='.$rows['pro_id'].'">'.$rows['description'].'</a></td>
							  <td><a href="?id='.$rows['pro_id'].'"><img src="'.$dir.$rows['image'].'" alt="Product Image" width="150px" 		height="150px"></a></td>
							  <td><a href="?id='.$rows['pro_id'].'">'.$rows['gender'].'</a></td>
							  <td><a href="?id='.$rows['pro_id'].'">'.$rows['price'].'</a></td>
							<td><a href="?id='.$rows['pro_id'].'">'.$rows['comp_id'].'</a></td>
                    		</tr>';
					}	
				}
			}
			
				//Hàm list account ở trang AdminLTE-master/pages/forms/advanced.php
				function general_list_account($sql){
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '<tr>
								<td><a href="?id='.$rows['user_id'].'">'.$rows['user_id'].'</a></td>
							  <td><a href="?id='.$rows['user_id'].'">'.$rows['username'].'</a></td>
							  <td><a href="?id='.$rows['user_id'].'">'.$rows['email'].'</a></td>
							  <td><a href="?id='.$rows['user_id'].'">'.$rows['password'].'</a></td>
							  <td><a href="?id='.$rows['user_id'].'">'.$rows['permission'].'</a></td>		
                    		</tr>';
					}	
				}
			}
			
	
			//Hàm lấy value cho form ở trang AdminLTE-master/pages/forms/general.php
			function get_name_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT name FROM products WHERE pro_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['name'];
					}
				}
			}
			
			function get_price_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT price FROM products WHERE pro_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['price'];
					}
				}
			}
			
			function get_description_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT description FROM products WHERE pro_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['description'];
					}
				}
			}
			
			function get_gender_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT gender FROM products WHERE pro_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						$gender = $rows['gender'];
						return $gender;
					}
					else{
						return false;	
					}
				}
			}
			
			
			function get_username_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT username FROM user WHERE user_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['username'];
					}
				}
			}
			
			function get_email_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT email FROM user WHERE user_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['email'];
					}
				}
			}
			
			function get_password_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT password FROM user WHERE user_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						echo $rows['password'];
					}
				}
			}
			
			function get_permission_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT permission FROM user WHERE user_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						return $rows['permission'];
					}
				}
			}
			
			function company_list($sql){
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						if($this->get_company_value()==$rows['comp_id']){
							echo '<option value="'.$rows['comp_id'].'" selected>'.$rows['name'].'</option>';
						}
						else{
							echo '<option value="'.$rows['comp_id'].'">'.$rows['name'].'</option>';	
						}
						
					}	
				}
			}
			
			function get_company_value(){
				if(isset($_REQUEST['id'])){
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$sql = "SELECT comp_id FROM products WHERE pro_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						return $rows['comp_id'];
					}
				}
			}
			
			//Hàm đổ CSS cho các trang product men_nike.php, men_adidas.php,...
			function men_nike_list($sql){
				$dir = 'products-images/';
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows = $result->fetch_assoc()){
						echo '<li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="product_detail.php?id='.$rows['pro_id'].'" title="Sample Product" class="product-image"> <img src="'.$dir.$rows['image'].'" alt="Sample Product"> </a> 
                        <div class="item-box-hover">
                          <div class="box-inner"> <div class="actions">
                            <div class="add_cart">
                              <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                            </div>
                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                           <span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Sample Product">'.$rows['name'].'</a> </div>
                        <div class="item-content">
                          <div class="rating">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                              </div>
                              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                            </div>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">'.number_format($rows['price'] , 0, ',', '.').'VND'.'</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>';
					}	
				}	
			}
			
			//Đổ CSS trang index
			function index_page_list($sql){
				$con = $this->connect();
				$dir = 'products-images/';
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '<li class="item item-animate wide-first">
                                <div class="item-inner">
                                  <div class="item-img">
                                    <div class="item-img-info"><a href="product_detail.php?id='.$rows['pro_id'].'" title="Sample Product"
                                        class="product-image"><img src="'.$dir.$rows['image'].'"
                                          alt="Sample Product"></a>
                                      <div class="new-label new-top-left">New</div>
                                      <div class="item-box-hover">
                                        <div class="box-inner">
                                          <div class="actions">
                                            <div class="add_cart">
                                              <button class="button btn-cart" type="button"><span>Add to
                                                  Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html"
                                                class="button detail-bnt"><span>Quick View</span></a></div>
                                            <span class="add-to-links"><a href="wishlist.html" class="link-wishlist"
                                                title="Add to Wishlist"><span>Add to Wishlist</span></a> <a
                                                href="compare.html" class="link-compare add_to_compare"
                                                title="Add to Compare"><span>Add to Compare</span></a></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item-info">
                                    <div class="info-inner">
                                      <div class="item-title"><a href="product_detail.html"
                                          title="Sample Product">'.$rows['name'].'</a> </div>
                                      <div class="item-content">
                                        <div class="rating">
                                          <div class="ratings">
                                            <div class="rating-box">
                                              <div class="rating" style="width:80%"></div>
                                            </div>
                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                class="separator">|</span> <a href="#">Add Review</a> </p>
                                          </div>
                                        </div>
                                        <div class="item-price">
                                          <div class="price-box"><span class="regular-price"><span
                                                class="price">'.number_format($rows['price'] , 0, ',', '.').'đ'.'</span> </span> </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>';
					}
				}
			}
			
			//Hàm CSS cho trang css 2
			function index_page_list_featured($sql){
				$con = $this->connect();
				$dir = 'products-images/';
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '  <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Sample Product"
                      href="product_detail.php?id='.$rows['pro_id'].'"> <img alt="Sample Product" src="'.$dir.$rows['image'].'"> </a>
                    <div class="sale-label sale-top-left">sale</div>
                    <div class="item-box-hover">
                      <div class="box-inner">
                        <div class="actions">
                          <div class="add_cart">
                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                          </div>
                          <div class="product-detail-bnt"><a href="quick_view.html"
                              class="button detail-bnt"><span>Quick View</span></a></div>
                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist"
                              title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html"
                              class="link-compare add_to_compare" title="Add to Compare"><span>Add to
                                Compare</span></a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Sample Product" href="product_detail.html">'.$rows['name'].'</a>
                    </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:80%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a
                              href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">'.number_format($rows['price'] , 0, ',', '.').'đ'.'</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';	
					}	
				}
					
			}
			
			//Hàm để đổ dữ liệu cho trang product_detail class product-essential
			function product_detail_css_1($sql){
				if(isset($_REQUEST['id'])){
					$dir = 'products-images/';
					$id = $_REQUEST['id'];
					$con = $this->connect();
					$result = $con->query($sql);
					if($result->num_rows>0){
						while($rows=$result->fetch_assoc()){
							echo '<div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
              <div class="product-img-box col-sm-5 col-xs-12 bounceInRight animated">
                <div class="new-label new-top-left"> New </div>
                <div class="product-image">
                  <div class="large-image"> <a href="'.$dir.$rows['image'].'" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img alt="Thumbnail" src="'.$dir.$rows['image'].'"> </a> </div>
                  
                </div>
                <!-- end: more-images --> 
              </div>
              <div class="product-shop col-sm-7 col-xs-12 bounceInUp animated">
              <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                <div class="product-name">
                  <h1>'.$rows['name'].'</h1>
                </div>
                <div class="short-description"> 
                  <!--<h2>Quick Overview</h2>-->
                  <p>'.$rows['description'].'</p>
                </div>
                <div class="ratings">
                  <div class="rating-box">
                    <div style="width:60%" class="rating"></div>
                  </div>
                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Thêm đánh giá</a> </p>
                </div>
                <p class="availability in-stock pull-right"><span>Còn hàng</span></p>
                <div class="price-block">
                  <div class="price-box">
                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> '.number_format(($rows['price']*0.1)+$rows['price'] , 0, ',', '.').'đ'.' </span> </p>
                    <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"</span>'.number_format($rows['price'] , 0, ',', '.').'đ'.'</p>
                  </div>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <label for="qty">Qty:</label>
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <button onClick="var result = document.getElementById("qty"); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        
                        <button onClick="var result = document.getElementById("qty"); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                      </div>
                    </div>
					<form method="post" id="form-1">
					<button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="submit" name="btn_add"><span><i class="icon-basket"></i> THÊM VÀO GIỎ HÀNG</span></button>
   					 </form>
                  </div>

                </div>
              </div>
              
            </form>
          </div>';
						}
					}	
				}
			
			}
			
			//Hàm để đổ dữ liệu cho trang product_detail class product-collateral
			function product_detail_css_2($sql){
				$dir = 'products-images/';
				$id = $_REQUEST['id'];
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '<div class="product-collateral col-sm-12 col-xs-12 bounceInUp animated">
            <div class="add_info">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô Tả Sản Phẩm </a> </li>
                <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="product_tabs_description">
                  <div class="std">
                    <p>'.$rows['description'].'</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_tags">
                  <div class="box-collateral box-tags">
                    <div class="tags">
                      <form id="addTagForm" action="#" method="get">
                        <div class="form-add-tags">
                          <label for="productTagName">Add Tags:</label>
                          <div class="input-box">
                            <input class="input-text" name="productTagName" id="productTagName" type="text">
                            <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                          </div>
                          <!--input-box--> 
                        </div>
                      </form>
                    </div>
                    <!--tags-->
                    <p class="note">Use spaces to separate tags. Use single quotes () for phrases.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>';
					}
				}	
			}
			
			//Hàm để đổ dữ liệu cho trang product_detail class related-slider
			function product_detail_css_3(){
				$id = $_REQUEST['id'];
				$company = $this->get_company_value();
				$sql = "SELECT * FROM products WHERE comp_id='$company' AND pro_id!='$id'";
				$dir = 'products-images/';
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						echo '<div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.php?id='.$rows['pro_id'].'"> <img alt="Sample Product" src="'.$dir.$rows['image'].'"></a>
                    <div class="item-box-hover">
                      <div class="box-inner">                                        
                                        <div class="actions">
                                        <div class="add_cart">
                                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div> <span class="add-to-links">
 <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Sample Product" href="product_detail.php?id='.$rows['pro_id'].'">'.$rows['name'].'</a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:100%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box">
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-27" class="price"'.number_format(($rows['price']*0.1)+$rows['price'] , 0, ',', '.').'đ'.'</span> </p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-27" class="price">'.number_format($rows['price'] , 0, ',', '.').'đ'.'</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
					}
				}	
			}
			
			function blog_css($sql){
				$con = $this->connect();
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows = $result->fetch_assoc()){
						echo '
                    <div class="entry-content">
                     	'.$rows['content'].'
                      </div>
                      <p> <a class="btn" href="blog_detail.html?id='.$rows['blog_id'].'">Read More</a> </p>
                    </div>';
					}	
				}	
			}
			
			//Hàm in danh sách của shopping cart
			function sub_connect(){
				$con = $this->connect();
				return $con;
			}

			//
			function count_shoppingcart(){
				$con = $this->connect();
				$user_id = $_SESSION['user_id'];
				$sql = "SELECT cart_id FROM orders WHERE user_id='$user_id'";
				$count = 0;
				$result = $con->query($sql);
				if($result->num_rows>0){
					while($rows=$result->fetch_assoc()){
						$count += count($rows['cart_id']);
					}
				}
			
				return $count;
			}
			
					// Hàm list mini cart
		function cart_list_mini(){
			$con = $this->connect();
			$user_id = $_SESSION['user_id'];
			$dir = 'products-images/';
			$sql = "SELECT pd.image, pd.name, pd.price, od.cart_id, od.qty, od.subtotal, od.pro_id
			FROM products AS pd JOIN orders AS od ON pd.pro_id = od.pro_id AND od.user_id='$user_id' LIMIT 2";
			$count = $this->count_shoppingcart();
			$result = $con->query($sql);
		
			echo '<div class="mini-cart">
			<div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a
					href="#"><span class="hidden-xs">Shopping Cart ('.$count.')</span></a></div>';
			echo '<div>
				<div class="top-cart-content" style="display: none;">
					<div class="block-subtitle">
					</div>';
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					echo '
				<!--block-subtitle-->
				<ul class="mini-products-list" id="cart-sidebar">
					<li class="item first">
						<div class="item-inner"><a class="product-image"
								title="Sample Product" href="product_detail.php?id='.$rows['pro_id'].'"><img alt="Sample Product"
									src="'.$dir.$rows['image'].'"></a>
							<div class="product-details">
								<div class="access"><a class="btn-remove1"
										title="Remove This Item" href="#">Remove</a>
								</div>
								<!--access--> <strong>'.$rows['qty'].'</strong> x <span
									class="price">'.number_format($rows['price'] , 0, ',', '.').'đ'.'</span>
								<p class="product-name"><a href="product_detail.php">'.$rows['name'].'</a></p>
							</div>
						</div>
					</li>
				</ul>';
				}
			}
			if($count>2){
				echo '<div class="more" style="font-size: 15px; text-align: center;">
				<a href="shopping_cart.php"><p>And more</p></a>
				</div>'; 
			}
				
			echo '<div class="actions">
				<a href="shopping_cart.php">
				<button class="btn-checkout" title="Checkout"
					type="button" ><span>Check out</span></button>
					</a>
					</div>';
					echo '<!--actions-->
					</div>
				</div>
			</div>';
		}
		
		function get_username(){
			$username = $_SESSION['username'];
			echo $username;	
		}
			
		//Hàm đổ dữ liệu cho bảng Latest Order
		function latest_order(){
			$sql = "select od.order_detail_id, od.user_id, pd.name, od.location, od.city, od.order_date, od.status
					from products as pd join order_detail as od 
					on pd.pro_id=od.pro_id 
					order by od.order_detail_id desc";
			$con = $this->connect();
			$result = $con->query($sql);
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					echo '<tr>';
                 	echo '<td><a href="pages/examples/invoice.php?userid='.$rows['user_id'].'&date='.$rows['order_date'].'">'.$rows['order_detail_id'].'</a></td>';
                    echo  '<td>'.$rows['name'].'</td>';
					if($rows['status']==1){
						echo '<td><span class="label label-danger">Đang vận chuyển</span></td>';	
					}
					else if($rows['status']==3){
						echo '<td><span class="label label-success">Thành Công</span></td>';	
					}
					else{
						echo '<td><span class="label label-info">Đang xử lý</span></td>';
					}
                    echo  '<td>'.$rows['location'].', '.$rows['city'].'</td>';
                    echo '</tr>';
				}
			}
		}
		//Hàm đổ dữ liệu cho trang invoice.php
		function invoice_table(){
			$con = $this->connect();
			$userid = $_GET['userid'];
			$date = $_GET['date'];
			$shipping = 30000;
			$sql = "SELECT *
					FROM products AS pd
					INNER JOIN order_detail AS od
					INNER JOIN user AS u ON pd.pro_id = od.pro_id
					AND u.user_id = od.user_id
					AND od.user_id = '$userid'
					AND od.order_date = '$date'";
			$result = $con->query($sql);
			$result2= $con->query($sql);
			$info = $result2->fetch_assoc();
						echo '<section class="invoice">
					  <!-- title row -->
					  <div class="row">
						<div class="col-xs-12">
						  <h2 class="page-header">
							<i class="fa fa-globe"></i> AdminLTE, Inc.
							<small class="pull-right">Date: 2/10/2014</small>
						  </h2>
						</div>
						<!-- /.col -->
					  </div>
					  <!-- info row -->
					  <div class="row invoice-info">
						<div class="col-sm-4 invoice-col">
						  From
						  <address>
							<strong>Admin, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							Phone: (804) 123-5432<br>
							Email: something@iuh.edu.vn
						  </address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
						  To
						  <address>
							<strong>'.$info['recipient_name'].'</strong><br>
							'.$info['location'].', '.$info['city'].'<br>
							Phone: '.$info['phone_number'].'<br>
							Email: '.$info['email'].'
						  </address>
						</div>
						<!-- /.col -->
						<div class="col-sm-4 invoice-col">
						  <b>Invoice #007612</b><br>
						  <br>
						  <b>Order ID:</b> <br>
						  <b>Payment Due:</b> '.$info['order_date'].'<br>
						  <b>Account:</b> '.$info['username'].'
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
				
					  <!-- Table row -->
					  <div class="row">
						<div class="col-xs-12 table-responsive">
						  <table class="table table-striped">
							<thead>
							<tr>
							<th>Mã sản phẩm</th>
							  <th>Tên sản phẩm</th>
							  <th>Số lượng</th>
							  <th>Tổng cộng</th>
							</tr>
							</thead>
						<tbody>';
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					//$total=0;
					echo '<tr>
							<td>'.$rows['pro_id'].'</td>
							<td>'.$rows['name'].'</td>
							<td>'.$rows['qty'].'</td>
							<td>'.number_format($rows['price'] , 0, ',', '.').'đ'.'</td>
						</tr>';	
					$total += $rows['price'];
				}
				$vat = $total*0.08;	
			}
			else{
				echo 'No Result found';
			}
			echo '</tbody>
						  </table>
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
				
					  <div class="row">
						<!-- accepted payments column -->
						<div class="col-xs-6">
						  <p class="lead">Payment Methods:</p>
						  <img src="../../dist/img/credit/visa.png" alt="Visa">
						  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
						  <img src="../../dist/img/credit/american-express.png" alt="American Express">
						  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
				
						  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
							Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
							dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
						  </p>
						</div>
						<!-- /.col -->
						<div class="col-xs-6">
						  <p class="lead">Amount Due '.$info['order_date'].'</p>
				
						  <div class="table-responsive">
							<table class="table">
							  <tr>
								<th style="width:50%">Subtotal:</th>
								<td>'.number_format($total , 0, ',', '.').'đ'.'</td>
							  </tr>
							  <tr>
								<th>Thuế VAT (8%)</th>
								<td>'.number_format($vat , 0, ',', '.').'đ'.'</td>
							  </tr>
							  <tr>
								<th>Phí vận chuyển:</th>
								<td>'.number_format($shipping , 0, ',', '.').'đ'.'</td>
							  </tr>
							  <tr>
								<th>Total:</th>
								<td>'.number_format($shipping+$total+$vat , 0, ',', '.').'đ'.'</td>
							  </tr>
							</table>
						  </div>
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->';
					 
		}
		//Hàm đổ dữ liệu cho trang account-info.php
		function account_order_list(){
			if(isset($_SESSION['user_id'])){
				$userid=$_SESSION['user_id'];
				$con = 	$this->connect();
				$sql = "SELECT *
					FROM products AS pd
					INNER JOIN order_detail AS od
				 	ON pd.pro_id = od.pro_id
					AND od.user_id = '$userid' 
					ORDER BY od.order_date desc";
				$result = $con->query($sql);
				while($rows=$result->fetch_assoc()){
					$i=1;
					echo '<tr>
                                        <th scope="row">'.$i.'</th>
                                        <td>'.$rows['name'].'</td>
                                        <td>'.$rows['qty'].'</td>
                                        <td>'.number_format($rows['price']*$rows['qty'] , 0, ',', '.').'đ'.'</td>';
					if($rows['status']==1){
						echo '<td><span class="label label-danger" style="color:#fff;">Đang vận chuyển</span></td>';	
					}
					else if($rows['status']==3){
						echo '<td><span class="label label-success" style="color:#fff;">Thành Công</span></td>';	
					}
					else{
						echo '<td><span class="label label-info" style="color:#fff;">Đang xử lý</span></td>';
					}
					if($rows['status']==1 ){
                  		  echo '<td><button type="button" class="btn btn-success"><a href="accept-order.php?userid='.$rows['user_id'].'&date='.$rows['order_date'].'">ĐÃ NHẬN ĐƯỢC HÀNG</a></button></td >';
					}
					else{
						echo '<td></td>';	
					}
                  echo  '</tr>';
				
				$i=$i+1;
				}
			}
		}
	}
?>