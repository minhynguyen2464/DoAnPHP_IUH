<?php
    include('class/admin.php');
    $p = new admin();
	$con = $p->connect();
    $id=$_REQUEST['id'];
	
	//Lấy qty từ cart
	$select = "SELECT qty,pro_id from orders where cart_id='$id'";
	$result = $con->query($select);
	$rows = $result->fetch_assoc();
	$pro_id= $rows['pro_id'];
	$qty=$rows['qty'];
	//Thực hiện update stock
	$update_stock = "UPDATE products SET in_stock=in_stock+'$qty' WHERE pro_id='$pro_id'";
	$p->product_modify($update_stock);
	//Xóa 
    $sql="delete from orders where cart_id='$id'";
    $p->product_modify($sql);
    header('location:shopping_cart.php');
?>