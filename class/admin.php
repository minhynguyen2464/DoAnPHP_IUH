<?php
	session_start();
	class admin{	
		function checkInput($username,$password){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			if($username=='admin' && $password=='123456'){
				header('Location: AdminLTE-master/index2.html');
			}
 		}
		
		function checkSession(){
			if($_SESSION['username']!='admin' || $_SESSION['password']!='123456'){
				header('Location: login.php');	
			}	
		}
		
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
			private function connect(){
			$con = new MySQLi('localhost','admin','123qwe!@#','shoeDatabase');	
			if($con->connect_error){
				die('Connection failed: '. $con->connect_error);
			}
			return $con;
		}	
		
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
	}
?>