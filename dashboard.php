<?php
include'navbar.php';

// Check if the 'email' key is set in the session
if (isset($_SESSION['email'])) {
   
} else {
    // Handle the case where 'email' is not set, such as redirecting to the login page
    header("Location: login.php");
    exit();
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
   <link rel="stylesheet" type="text/css" href="dashboard.css">
   <title>Dashboard</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm my-2">
      <div class="text-center"> <!-- Center content horizontally -->
         <div class="upper">
          <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
         </div>

        <img src="image/imran.jpg" class="circle-icons">
        <h1 id="nameindas"> Imran Ali </h1>
        <span><i class="fa-solid fa-at"></i> Imran@gmail.com</span>
      </div>
    </div>
    <div class="col-sm my-2">
        <h1 id="nameindas" style="color:#21B9F1">Update Profile <i class="fa-regular fa-pen-to-square"></i> </h1>
      <form>
      <div class="form-group">
        <label for="exampleFormControlFile1">Choose Profile Picture</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        <label for="firstname">First Name</label>
        <input type="text" name="name1" placeholder="Imran Ali" id="firstname">
        <label for="lastname">Last Name</label>
        <input type="text" name="name2" placeholder=" Ali" id="lastname" >
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="pfefe" id="password">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder=" im@gmail.com" id="email">
        <button type="btn btn-primary" id="submitdas"> Submit </button>
      </div>
    </form>
    </div>
    <div class="col-sm my-2">
            <div class="container">
              <div class="row" id="widone">
                <div class="col-sm-8" >
                  One of three columns
                </div>
               </div>
               <div class="row" id="widtwo">
                <div class="col-sm-8">
                  One of three columns
                </div>
            </div>
            <div class="row" id="widthree">
                <div class="col-8" >
                  One of three columns
                </div>
              </div>
            </div>
    </div>
  </div>
</div>


<style type="text/css">
    


input[type="text"],
input[type="password"],
input[type="email"],
input[type="file"],
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#submitdas{
    background-color: #000;
    color: #ffff;
    width: 168px;
    text-align: center;
    color: #ffffff;
    transition: 0.2s;
    font-weight: 600;
  }
  #submitdas:hover{
     background-color: #21B9F1;
     cursor: pointer; 
  }

  #widone{
    margin:5px;
    background: hsla(333, 100%, 53%, 1);
    background: linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);
    background: -webkit-linear-gradient(90deg, hsla(333, 100%, 53%, 1) 0%, hsla(33, 94%, 57%, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#FF0F7B", endColorstr="#F89B29", GradientType=1 );
  }
  #widtwo{
     margin:5px;
    background: hsla(136, 48%, 54%, 1);
    background: linear-gradient(90deg, hsla(136, 48%, 54%, 1) 0%, hsla(58, 99%, 48%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(136, 48%, 54%, 1) 0%, hsla(58, 99%, 48%, 1) 100%);
    background: -webkit-linear-gradient(90deg, hsla(136, 48%, 54%, 1) 0%, hsla(58, 99%, 48%, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#51C26F", endColorstr="#F2E901", GradientType=1 );
  }
  #widthree{
     margin:5px;
    background: hsla(198, 65%, 34%, 1);
    background: linear-gradient(90deg, hsla(198, 65%, 34%, 1) 0%, hsla(178, 44%, 32%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(198, 65%, 34%, 1) 0%, hsla(178, 44%, 32%, 1) 100%);
    background: -webkit-linear-gradient(90deg, hsla(198, 65%, 34%, 1) 0%, hsla(178, 44%, 32%, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#1E6C8E", endColorstr="#2E7775", GradientType=1 );
  }
</style>
</body>
</html>