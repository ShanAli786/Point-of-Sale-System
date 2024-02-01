

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
<style>
  body{
    background-image: url('pictures/add.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .container{
   
  justify-content: center;
  text-shadow: 23px;
  }
  .a{
    color: white;
  }
</style>
<body>
  <script>
  	alert(Fill the form);
  </script>
  <br>
  <div class="container">
  	<h1 style="font-family: times-new-roman; color: white; text-align: center;">Add Manager</h1>
  	<div class="col-lg-8 m-auto b-block">
  		<form class="bg-dark" action="add.php" onsubmit="return validation();">
  			<div class="form-group">
  				<label class="a"><b>Employee name:</b></label>
  				<input type="text" name="Fname" id="Fname" class="form-control" autocomplete="off">
  				<span id="Fnameid" class="text-danger font-weight-bold"></span>
  			</div>
  			<div class="form-group">
  				<label class="a"><b>Last name:</b></label>
  				<input type="text" name="Lname" id="Lname" class="form-control" autocomplete="off">
  				<span id="Lnameid" class="text-danger font-weight-bold"></span>
  			</div>
  			 <div class="form-group">
          <label class="a"><b>Designtion:</b></label>
          <input type="text" name="desname" id="desname" class="form-control" autocomplete="off">
          <span id="usernameid" class="text-danger font-weight-bold"></span>
        </div>
        
             <div class="form-group">
  				<label class="a"><b>Email:</b></label>
  				<input type="text" id="email" name="email" class="form-control" autocomplete="off">
  				<span id="emailid" class="text-danger font-weight-bold"></span>
  			</div>
  			<div class="form-group">
  				<label class="a"><b>Phone Number:</b></label>
  				<input type="text" id="phonenum" name="phonenum" class="form-control" autocomplete="off">
  				<span id="phonenumid" class="text-danger font-weight-bold"></span>
  			</div>
              <input type="submit" value="ADD" class="btn btn-secondary btn-block">

  		</form>
  	</div>
  </div>
  <button style="justify-content: center; margin-left: 24%; width: 52.5%;" id="center" class="btn btn-dark"><a href="administrator.html">Back</a></button>
   <script>
   	function validation(){

    var Fname = document.getElementById('Fname').value;
    var Lname = document.getElementById('Lname').value;
    var desname = document.getElementById('desname').value;
    var email=document.getElementById('email').value;
    var phonenum = document.getElementById('phonenum').value;
   
     if(Fname == ''){
     	document.getElementById('Fnameid').innerHTML ="**** please fill the First name";
     	return false;
     }

     if(Lname == ''){
     	document.getElementById('Lnameid').innerHTML ="**** please fill the Last name";
     	return false;
     }
     if(desname == ''){
      document.getElementById('Lnameid').innerHTML ="**** please fill the Last name";
      return false;
     }
      
      
      if (email.indexOf("@") <0) {
      document.getElementById('emailid').innerHTML="**** please enter in proper format @ ";
      return false;
     }
     if (email.charAt(email.length-4) !='.')  {
      document.getElementById('emailid').innerHTML="**** please enter in proper format .com ";
      return false;
      } 
      if(phonenum == ''){
      document.getElementById('phonenumid').innerHTML ="**** please fill the phonenumber";
      return false;
     }  
     if (isNaN(phonenum)) {
      document.getElementById('phonenumid').innerHTML="**** please fill the proper digits";
      return false;
     }
     if (phonenum.length != 11) {
      document.getElementById('phonenumid').innerHTML="**** length must be euqal to 11";
      return false;
     }
   	}
   </script>
</body>
</html>
