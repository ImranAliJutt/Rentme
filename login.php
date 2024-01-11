<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="registeraton.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

	<title>Login</title>
</head>
<body>
<div class="container">
<form action="login.php" method="POST">
	<div class="form-group">
		<h2 class="logo" src="RentMelogo.png" alt="logo">Welcome Back to <span class="renting">Rentme</span></h2>
	</div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <br><br>
  <span>If you are new please click here for <a href="registeration.php"> Registeration </a> </span>
</form>
 <?php 
    if(isset($_POST['login'])){
      include('db.php');
      $email=$_POST['email'];
      $password=$_POST['password'];

      $query="SELECT * FROM `registerforrent` WHERE  `email`='$email' and `password`='$password'";
      $result=mysqli_query($conn,$query);
      if ($result) {
       
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['email']=$_POST['email'];
                ?>
                <script type="text/javascript">
                window.location.assign("index.php");
                </script>
                <?php

        } else {
            
            echo '<div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> Invalid email or password.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button> </div>';
                
               }

       } else {
       
        echo '<div class="alert alert-danger alert-dismissible fade show">
            <strong>Error!</strong> Something went wrong.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button> </div>';
               }

      mysqli_close($conn);
  }
     
      ?>

</div>
</body>

</html>