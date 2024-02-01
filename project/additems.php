<?php

	require("connectionproduct.php");
	$id = $_GET['pid'];
	$name = $_GET['pname'];
	$cat = $_GET['pcat'];
	$price = $_GET['price'];
	$quantity = $_GET['quantity'];

	$query = "insert into product (pid,pname, pcat, price, quantity) values 
	('$id','$name', '$cat', '$price', '$quantity')";
	$result = mysqli_query($con, $query);
	if($result == TRUE){
		header("location:upproduct.php");
		echo "Name: $name <br>";
		echo "Category: $cat <br>";
		echo "Price: $price <br>";
		echo "Quantity: $quantity <br>";
	}
	else{
		echo "Error: " . mysqli_connect_error();
	}


?>