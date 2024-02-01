<?php
require("connectionproduct.php");
	$id = $_GET['pid'];
	$name = $_GET['pname'];
	$cat = $_GET['pcat'];
	$price = $_GET['price'];
	$quantity = $_GET['quantity'];
	$uq="UPDATE product SET pid='$id',pname='$name',pcat='$cat',price='$price',quantity='$quantity' WHERE pid='$id'";
	$rs = mysqli_query($con, $uq);

	if ($rs) {
		header("location:upproduct.php");
		echo "Data updated Successfully";
	}else{
		echo "error";
	}
?>