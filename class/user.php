<?php
	class user{
		function checkPassword($pw1,$pw2){
			if($pw1!=$pw2){
				echo '<script>alert("Password không giống nhau")</script>';
				return false;
			}	
			return true;
		}	
	}
?>