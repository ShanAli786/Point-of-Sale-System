<?php

	require("connection.php");
	$id=$_GET['did'];
	$query = "DELETE FROM empdata WHERE id='$id'";
	$result = mysqli_query($con, $query);

	if($result==TRUE){
		header("location:Updatedata.php");
		echo "Employee has been removed!";
	}
	else{
		echo "Error in executing query!";
	}	
?>