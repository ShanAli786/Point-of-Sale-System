
<!--h==================Designing page of view employees================================================= -->	

<?php
	include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Details of Employee</title>
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
			margin-left: 82%;
			justify-content: center;
			width: 78px;
			color: red;
		}

	</style>

</head>
<body>

	<br><br><br>
<div class="container">
  <h2><b>Check Employee Data</b></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Employee Name</th>
        <th>Last Name</th>
        <th>Designation</th>
		<th>Email</th>
		<th>contact Number</th>
		
      </tr>
    </thead>
    <tbody>
	<?php
				$query = "select * from empdata";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	if($count == 0){
		echo "No employee found!";
	}
	else{
		echo " ";}
		while($fetchdata = mysqli_fetch_array($result, MYSQLI_ASSOC)){	
	
	?>
      <tr>
       
        <td><?php echo $fetchdata['Fname']; ?></td>
        <td><?php echo $fetchdata['Lname']; ?></td>
		<td><?php echo $fetchdata['desname']; ?></td>
		<td><?php echo $fetchdata['email']; ?></td>
		<td><?php echo $fetchdata['phonenum']; ?></td>
		<td>

			<form action='remove.php' method='get'>
						<input type='hidden' name='did' value='$id' >
							
						
			<input type="hidden" name="did" value="<?php echo $fetchdata['id']; ?>">
		<button class="btn btn-outline-danger">Delete</button>
		</form><br>
			<form action='Update.php' method='get'>
						<input type='hidden' name='uid' value='$id' >
							
						
			<input type="hidden" name="uid" value="<?php echo $fetchdata['id']; ?>">
	
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
