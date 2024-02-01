<?php

	/*include "connectionproduct.php";*/
	require("connectionproduct.php");
	$id=$_GET['did'];
	$query = "DELETE FROM product WHERE pid='$id'";
	$result = mysqli_query($con, $query);

	if($result==TRUE){
		header("location:upproduct.php");
		
	}
	else{
		echo "Error in executing query!";
	}	
?>