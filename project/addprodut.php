

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <style >
    body{
      background-image: url(pos.jpg);
    }
    .a{
      color: white;
    }
    .container{
        width: 40%;
    }
    .center{
        margin-right: 40%;
    }
  </style>
  <script>
  	alert(Fill the form);
  </script>
  <br>
  <div class="container">
  	<h1 style="font-family: times-new-roman; text-align: center;">Add products
    </h1>
  	<div class="col-lg-8 m-auto b-block">
  		<form class="bg-dark" action="additems.php" onsubmit="return validation();">
  			<div class="form-group">
  				<label class="a">product id</label>
  				<input type="text" name="pid" id="pid" class="form-control" autocomplete="off">
  				<span id="pid id" class="text-danger font-weight-bold"></span>
  			</div>
  			<div class="form-group">
  				<label class="a">product name</label>
  				<input type="text" name="pname" id="pname" class="form-control" autocomplete="off">
  				<span id="pnameid" class="text-danger font-weight-bold"></span>
  			</div>
  			 <div class="form-group">
          <label class="a">product catagory</label>
          <input type="text" name="pcat" id="pcat" class="form-control" autocomplete="off">
          <span id="usernameid" class="text-danger font-weight-bold"></span>
        </div>
        
             <div class="form-group">
  				<label class="a">price</label>
  				<input type="text" id="price" name="price" class="form-control" autocomplete="off">
  				<span id="priceid" class="text-danger font-weight-bold"></span>
  			</div>
  			<div class="form-group">
  				<label class="a">qantity</label>
  				<input type="text" id="quantity" name="quantity" class="form-control" autocomplete="off">
  				<span id="quantityid" class="text-danger font-weight-bold"></span>
  			</div>
              <input type="submit" value="ADD" class="btn btn-secondary btn-block">
  		</form>
  	</div>
  </div>
            <button style="justify-content: center; margin-left: 38.5%; width: 23%;" id="center" class="btn btn-dark"><a href="manageitems.html">Back</a></button>
   <script>
   	function validation(){

    var pid = document.getElementById('pid').value;
    var pname = document.getElementById('pname').value;
    var pcat = document.getElementById('pcat').value;
    var price=document.getElementById('price').value;
    var quantity = document.getElementById('quantity').value;
   
     if(pid == ''){
     	document.getElementById('pidid').innerHTML ="**** please give the id ";
     	return false;
     }

     if(pname == ''){
     	document.getElementById('pnameid').innerHTML ="**** please fill the Last name";
     	return false;
     }
     if(pcat == ''){
      document.getElementById('usernameid').innerHTML ="**** please fill the catagory";
      return false;
     }
      
      if(quantity == ''){
      document.getElementById('quantityid').innerHTML ="**** please fill the quantityber";
      return false;
     }  
     if (isNaN(quantity)) {
      document.getElementById('quantityid').innerHTML="**** please fill the proper digits";
      return false;
     }
     if (quantity.length != 3) {
      document.getElementById('quantityid').innerHTML="**** length must be euqal to 3";
      return false;
     }
   	}
   </script>
</body>
</html>
