	
<?php
	include 'connectionproduct.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Details of Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		h2{
			margin-left: 400px;
			color: white;
			font-size: 50px;
			font-family: georgia;
			margin-bottom: 40px;
			padding-bottom: 30px;

		}
		h4{
			
			color: white;
		}
		body{
			background-size: cover;
		}
		th{
			color: white;
		}
		#end{
			margin-left: 75%;
			justify-content: center;
			width: 78px;
			color: red;
		}


	</style>

</head>
<body>

	<br><br><br>
<div class="container">
  <h2><b>Check product Data</b></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>product Name</th>
        <th>catagory</th>
        <th>Price</th>
		
		<th>Quantity</th>
		
      </tr>
    </thead>
    <tbody>
	<?php
				$query = "select * from product";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	if($count == 0){
		echo "No product found!";
	}
	else{
		echo " ";}
		while($fetchdata = mysqli_fetch_array($result, MYSQLI_ASSOC)){	
	
	?>
      <tr>
       
        <td><?php echo $fetchdata['pname']; ?></td>
        <td><?php echo $fetchdata['pcat']; ?></td>
		<td><?php echo $fetchdata['price']; ?></td>
		<td><?php echo $fetchdata['quantity']; ?></td>
		
		<td>

			<form action='removeproduct.php' method='get'>
						<input type='hidden' name='did' value='$id' >
							
						
			<input type="hidden" name="did" value="<?php echo $fetchdata['pid']; ?>">
		<button class="btn btn-outline-danger">Delete</button>
		</form><br>
			<form action='updateproduct.php' method='get'>
						<input type='hidden' name='pid' value='$id' >
							
						
			<input type="hidden" name="pid" value="<?php echo $fetchdata['pid']; ?>">
	
		<button class="btn btn-outline-success">Update</button></td>
		</form>
	  </tr>
		<?php } ?>
    </tbody>
  </table>
  
</div>
<button id="end" class="btn btn-outline-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-add"></i>
                                        <a href="manger.html">BACK</a>
                                    </button>

<br><br><br><br><br><br><br><br><br>

	 	
		
<?php
	include 'footer.php';
?>
</body>
</html>

