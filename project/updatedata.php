<?php
require("connection.php");
	$chumian = $_GET['uid'];
	$F = $_GET['Fname'];
	$L = $_GET['Lname'];
	$d = $_GET['desname'];
	$e = $_GET['email'];
	$p = $_GET['phonenum'];
	$uq="UPDATE empdata SET Fname='$F',Lname='$L',desname='$d',email='$e',phonenum='$p' WHERE id='$chumian'";
	$rs = mysqli_query($con, $uq);
	if ($rs==TRUE) {
		header("location:viewdetail.php");
		echo "Data updated successfully!";
	}
?>