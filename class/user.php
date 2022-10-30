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
			$sql = "SELECT * FROM user where username='$username' AND password='$password'";
			$result = $con->query($sql);
			if($result->num_rows>0){
				$rows = $result->fetch_assoc();
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
			else{
				echo '<script>Wrong username or password</script>';	
			}
			
		}
		
		function check_login($username,$password,$userid,$email,$permission){
			$con = $this->connect();
			$sql = "SELECT * FROM user where username='$username' AND password='$password' AND user_id='$userid' AND permission='$permission' AND email='$email'";
			$result = $con->query($sql);
			if($result->num_rows==0){
				header('Location: login.php');	
			}
		}
	}
?>