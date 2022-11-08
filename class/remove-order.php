<?php 
	echo '1';
	include ("admin.php");
	$p = new admin();
	$con = $p->connect();
	$user_id = $_GET['userid'];
	$date = $_GET['date'];
	$select = "SELECT qty, pro_id FROM order_detail WHERE user_id='$user_id' AND order_date='$date'";
	$result = $con->query($select);
	if($result->num_rows>0){
		while($rows = $result->fetch_assoc()){
			$pro_id = $rows['pro_id'];
			$qty = $rows['qty'];
			$update="UPDATE products SET in_stock=in_stock+'$qty' WHERE pro_id='$pro_id'";
			$p->product_modify($update);
		}	
	}
	$sql = "DELETE FROM order_detail
			WHERE user_id='$user_id' AND order_date='$date'";
	$result = $con->query($sql);
	header('Location: ../account-order.php');
?>