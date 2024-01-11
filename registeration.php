<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="registeraton.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
	<title>Registeration Form</title>
</head>
<body>
<div class="container">
<form action="registeration.php" method="POST">
	<div class="form-group">
		<h2 class="logo" src="RentMelogo.png" alt="logo">Register for <span class="renting">Renting</span></h2>
	</div>
	<div class="form-group">
    <label for="exampleInputfirstname">First Name</label>
    <input type="text" class="form-control" id="exampleInputfirstname" name="firstname" placeholder="Enter first-name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputlastname">Last Name</label>
    <input type="text" class="form-control" id="exampleInputlastname" name="lastname" placeholder="Enter last-name" required>
  
  </div>
  <div class="form-group">

    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" 
    placeholder="Enter email" required>

    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
  <br><br>
  
  <span>If you are old user please click here for <a href="login.php"> Login </a> </span>
</form>

<?php 

if(isset($_POST['register'])){
  include('db.php');
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query="INSERT INTO `registerforrent` (`firstname`, `lastname`, `email`, `password`) 
          VALUES ( '$firstname', '$lastname', '$email', '$password')";

  $result=mysqli_query($conn,$query);
if($result==true){
  echo'<div class="alert alert-success alert-dismissible fade show">
       <strong>Success!</strong> Your are Registered successfully.
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button> </div>';
    }
else
    {
     echo'<div class="alert alert-danger alert-dismissible fade show">
          <strong>Success!</strong> Something Went wronge .
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button> </div>';
    }

}
?>

</div>
</body>
</html>