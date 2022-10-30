<?php
    include('class/admin.php');
    $p = new admin();

    $id=$_REQUEST['id'];
    echo $id;
    $sql="delete from orders where cart_id='$id'";
    $p->product_modify($sql);
    header('location:shopping_cart.php');
?>