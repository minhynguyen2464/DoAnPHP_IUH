<?php 
	include ("admin.php");
	$p = new admin();
	$con = $p->connect();
	$user_id = $_GET['userid'];
	$date = $_GET['date'];
	$sql = "UPDATE order_detail
			SET status=3 
			WHERE user_id='$user_id' AND order_date='$date'";
	$result = $con->query($sql);
	header('Location: account-order.php');
?>