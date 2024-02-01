<?php

	require("connectionproduct.php");
	if (isset($GET['subdata'])) {

	}
	
	?>

	<form action="updatedataproduct.php" method="GET">
	
			<table>
 

<?php 
// if (isset($_GET['uid'])) {
	$chumi = $_GET['pid'];
$query = "select * from product where pid = '$chumi'";
	$result = mysqli_query($con, $query);
	
	$row = mysqli_fetch_array($result);
// }
	
	 ?>
	 				<!DOCTYPE html>
<html>
<title>Update product details</title>
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
  <h2  style="text-align: center; font-family: georgia; font-size: 70px;"><b>Update Product Details</b></h2>
</div>

					<input type="hidden" name="pid" value="<?php echo $_GET['pid']?>">
					<td><label">product name:</label></td>
					<td><input class="w3-input" type="text" name="pname" value="<?php echo $row['pname'];?>"></td>
				</tr>
				<tr>
					<td><label>catagory:</label></td>
					<td><input class="w3-input" type="text" name="pcat" value="<?php echo $row['pcat'];?>"></td>
				</tr>
				<tr>
					<td><label>price:</label></td>
					<td><input class="w3-input" type="text" name="price" value="<?php  echo $row['price'];?>"></td>
				</tr>
				<tr>
					<td><label>Quantity:</label></td>
					<td><input class="w3-input" type="text" name="quantity" value="<?php  echo $row['quantity']?>"></td>
				</tr>
				
			</table>

			<button style="margin-left: 48px; margin-top: 48px; " type="submit" value="Update" name="subdata" class="w3-button w3-white w3-border w3-border-red w3-round-large">Update</button>
		</form>
		</form>

</body>
</html>
		