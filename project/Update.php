
		<!--===============================================================-->
		<?php

	require("connection.php");
	if (isset($GET['subdata'])) {

	}
	
	?>

	<form action="updatedata.php" method="GET">
	
			<table>
 

<?php 
// if (isset($_GET['uid'])) {
	$chumi = $_GET['uid'];
$query = "select * from empdata where id = '$chumi'";
	$result = mysqli_query($con, $query);
	
	$row = mysqli_fetch_array($result);
// }
	
	 ?>
	 				<!DOCTYPE html>
<html>
<title>Update product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
	.btn{
		background-color: blue;
		size: 20px;
	}
</style>
<div class="w3-container w3-blue">
  <h2 style="text-align: center; font-family: georgia; font-size: 70px; "><b>Update Employee Details</b></h2>
</div>

				<tr>
					<input type="hidden" name="uid" value="<?php echo $_GET['uid']?>">
					<td><label>First name:</label></td>
					<td><input class="w3-input" type="text" name="Fname" value="<?php echo $row['Fname'];?>"></td>
				</tr>
				<tr>
					<td><label>Last name:</label></td>
					<td><input class="w3-input" type="text" name="Lname" value="<?php echo $row['Lname'];?>"></td>
				</tr>
				<tr>
					<td><label>Desigantion:</label></td>
					<td><input class="w3-input"	type="text" name="desname" value="<?php  echo $row['desname'];?>"></td>
				</tr>
				<tr>
					<td><label>email:</label></td>
					<td><input class="w3-input" type="email" name="email" value="<?php  echo $row['email']?>"></td>
				</tr>
				<tr>
					<td><label>Phone number:</label></td>
					<td><input class="w3-input" type="number" name="phonenum" value="<?php  echo $row['phonenum'];?>"></td>
				</tr>
				
			</table>

			<button style="margin-left: 48px; margin-top: 48px; " type="submit" value="Update" name="subdata" class="w3-button w3-white w3-border w3-border-red w3-round-large">Update</button>
		</form>
		</form>

</body>
</html>
		