<?php
	session_start();
	class admin{	
		function checkInput($username,$password){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			if($username=='admin' && $password=='123456'){
				header('Location: AdminLTE-master/index2.php');
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
					$sql = "SELECT comp_id FROM user WHERE user_id='$id'";
					$result = $con->query($sql);
					if($result->num_rows>0){
						$rows = $result->fetch_assoc();
						return $rows['comp_id'];
					}
				}
			}
			
	}
?>