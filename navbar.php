<?php
// Start a session if not already started
session_start();
$email="";
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    
   }
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
  
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<title>Rentme</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index.php">
    <img src="image/logo.png" alt="Logo">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      
     </ul>
     <!-- Move the "Login" link to the right side -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Famous Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="frontlisting.php">Montreal</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <?php
        if (isset($_SESSION['email'])) {
          ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php" > <?php echo $email; ?> </a>
            </li> 

            <li class="nav-item">
              <div class="circle-icon-container">
                <a href="dashboard.php"><img src="image/imran.jpg" class="circle-icon" ></a>
                <i class="fas fa-plus-circle clickable-icon"></i>
              </div>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="logout.php" > Logout </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#" id="login" > Post a Rental <i class="fa-solid fa-plus" id="plus"></i> </a>
            </li>

          <?php
        }
        else
        {
          ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php" > Login / Register </a>
            </li>
          <?php
        }

        ?>
         

        
        
        
      </ul>
  </div>
</nav>
 <script type="text/javascript">
    function toggleImageIcon() {
        var icon = document.querySelector(".clickable-icon");
        icon.style.display = icon.style.display === "none" ? "block" : "none";
    }
</script>


<style type="text/css">
.circle-icon-container {
  position: relative;
  width: 50px; /* Width of the circle */
  height: 50px; /* Height of the circle */
}

.circle-icon {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
  cursor: pointer;
}

.clickable-icon {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 18px; /* Adjust the size as needed */
  color: #00AFEF; /* Change the color as needed */
  background-color: #fff; /* Remove the background color */
  cursor: pointer;
  border-radius: 50%;
}


</style>
</body>
</html>
   