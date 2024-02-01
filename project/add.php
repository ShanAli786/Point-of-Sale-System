<?php
require("connection.php");
     
	$Fname = $_GET['Fname'];
	$Lname = $_GET['Lname'];
	$desname = $_GET['desname'];
	$email = $_GET['email'];
	$phonenum = $_GET['phonenum'];
	$query = "insert into empdata (Fname, Lname, desname, email, phonenum) values ('$Fname', '$Lname','$desname', '$email', '$phonenum')";
	$result = mysqli_query($con, $query);
	if($result){
		header("location:viewdetail.php");
	}else{
		echo "Error: " . mysqli_connect_error();
	}

?>