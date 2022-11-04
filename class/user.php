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
			session_start();
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
		
		function salt_generator() {
			$sym = array(0,1,2,3,4,5,6,7,8,9,'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
			$sole = '';
			for ($i=1; $i <= 10; $i++) {
				$sole .= $sym[rand(0, count($sym) - 1)];
		   }
			return $sole;
		}
	}
?>