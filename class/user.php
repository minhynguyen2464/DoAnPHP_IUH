<?php
	include ('admin.php');
	class user extends admin{
		function checkPassword($pw1,$pw2){
			if($pw1!=$pw2){
				echo '<script>alert("Password không giống nhau")</script>';
				return false;
			}	
			return true;
		}	
		
		function get_login($username,$password){
			$con = $this->connect();
			$sql = "SELECT * FROM user where username='$username'";
			$result = $con->query($sql);
			if($result->num_rows>0){
				$rows = $result->fetch_assoc();
				$salt = $rows['salt'];
				$salted_password = $password.$salt;
				$password = hash('sha512',$salted_password);
				if($password==$rows['password']){
					session_start();
					$_SESSION['user_id'] = $rows['user_id'];
					$_SESSION['username'] = $rows['username'];
					$_SESSION['password'] = $rows['password'];
					$_SESSION['email'] = $rows['email'];
					$_SESSION['permission'] = $rows['permission'];
					if($_SESSION['permission']==1){
						header('Location: AdminLTE-master/index.php');	
					}
					else{
						header('Location: index.php');	
					}
				}
			}
			else{
				echo '<script>Wrong username or password</script>';	
			}
			
		}
		
		function check_login(){
			$username =  $_SESSION['username'];
			$password = $_SESSION['password'];
			$userid = $_SESSION['user_id'];
			$email = $_SESSION['email'];
			$permission = $_SESSION['permission'];
			$con = $this->connect();
			$sql = "SELECT * FROM user where username='$username' AND password='$password' AND user_id='$userid' AND permission='$permission' AND email='$email'";
			$result = $con->query($sql);
			if($result->num_rows==0){
				header('Location: login.php');	
			}
		}
		
		function check_admin(){
			$username =  $_SESSION['username'];
			$password = $_SESSION['password'];
			$userid = $_SESSION['user_id'];
			$email = $_SESSION['email'];
			$con = $this->connect();
			$sql = "SELECT * FROM user where username='$username' AND password='$password' AND user_id='$userid' AND permission=1 AND email='$email'";
			$result = $con->query($sql);
			if($result->num_rows==0){
				header('Location: ../404error.html');	
			}
		}
		
		//Tạo muối
		function salt_generator() {
			$sym = array(0,1,2,3,4,5,6,7,8,9,'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
			$sole = '';
			for ($i=1; $i <= 10; $i++) {
				$sole .= $sym[rand(0, count($sym) - 1)];
		   }
			return $sole;
		}
		
		//Tạo tài khoản
		function user_reigster($username,$email,$password,$password2){
			if($this->checkPassword($password,$password2)){
				$salt = $this->salt_generator();//Tạo muối
				$con = $this->connect();
				$salted_pasword = $password.$salt; //Trộn muối
				$password = hash('sha512',$salted_pasword);//Băm 
				$sql = "INSERT INTO user(username,email,password,permission,salt)
						VALUES('$username','$email','$password','0','$salt')";	
				if ($con->query($sql) === TRUE) {
				  /*$last_id = $con->insert_id; //Lấy id vừa insert vào
					$hash_id = hash('crc32',$last_id); //Mã hóa id
					echo'<script>alert("'..'")</script>';
					$update_id = "UPDATE user SET user_id='$hash_id' WHERE user_id='$last_id'"; //Update id với id đã mã hóa
					$this->product_modify($update_id);*/
					header('Location: login.php');
					exit;
				}
				else {
				  echo "Error: <br>" . $con->error;
				}
			}
			else{
				echo '<script>alert("Mật khẩu không giống nhau")</script>';	
			}	
		}
		
		function get_user_value($column){
			if(isset($_SESSION['user_id'])){
				$id = $_SESSION['user_id'];
				$con = $this->connect();
				$sql = "SELECT * FROM user_info WHERE user_id=$id";
				$result = $con->query($sql);
				if($result->num_rows>0){
					$rows = $result->fetch_assoc();
					echo $rows[$column];	
				}
			}
		}
		
		function return_user_value($column){
			if(isset($_SESSION['user_id'])){
				$id = $_SESSION['user_id'];
				$con = $this->connect();
				$sql = "SELECT * FROM user_info WHERE user_id=$id";
				$result = $con->query($sql);
				if($result->num_rows>0){
					$rows = $result->fetch_assoc();
					return $rows[$column];	
				}
			}
		}
		
		//Xem user đã cập nhật thông tin chưa
		function check_user_info(){
				$con = $this->connect();
				$id= $_SESSION['user_id'];
                 $sql = "SELECT user_id FROM user_info WHERE user_id='$id'";
				$result = $con->query($sql);
				if($result->num_rows>0){
					return 1;	
				}
				else{
					return 0;	
				}
		}
		
	//Return dữ liệu từ oder_detail
		function return_order_detail($user_id,$date,$column){
			$con = $this->connect();
			$sql = "SELECT SUM( od.qty ) AS qty, SUM( pd.price ) AS price, SUM(pd.price*od.qty)as subtotal, od.user_id, od.order_date
						FROM products AS pd
						INNER JOIN order_detail AS od ON pd.pro_id = od.pro_id
						AND od.user_id ='$user_id' AND od.order_date='$date'
						GROUP BY od.order_date";
			$result = $con->query($sql);
			if($result->num_rows>0){
				$rows = $result->fetch_assoc();
				echo $rows[$column];	
			}
		}
		
		

	}
?>