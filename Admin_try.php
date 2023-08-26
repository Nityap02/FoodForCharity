<?php
$conn = mysqli_connect ('localhost','root','','food_for_charity');
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
   <link rel="stylesheet" href="Admin_login.css">
</head>
<body>
    <div class="container">
      <form name="val_form" action="" method="post">
      <form action="#">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="User_Id" placeholder="Enter Your Email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="User_Password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
       <div><br>
        <h4><a href="#"><b>Forgot Password?</b></a></h4></div>
        <div class="input-box button">
          <input type="submit" name="submit" value="submit">
        </div><br>
        <!-- <p>Not a member?  <a href="#"> <b>Register here!</b></a></p> -->

      </form>
    </div>


  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $User_Id = mysqli_real_escape_string($conn, $_POST['User_Id']);
  $User_Password = mysqli_real_escape_string($conn, $_POST['User_Password']);

  $query = "SELECT * FROM admin WHERE User_Id = '$User_Id' AND User_Password = '$User_Password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    // Login successful, redirect to admin dashboard
    echo '<script>alert("Login Successful.")</script>';

    header('location: Admin_panel.php');
  } else {
    // Login failed, display an error message
    echo '<script>alert("Incorrect username or password.")</script>';

    // echo "Incorrect username or password.";
  }
}
?>

  </body>

</html>






<?php
require("DBconn.php");
// session_start();
  if(isset($_POST['submit']))
{
	  	

		if(!empty($_POST['submit']))
		{
			// $User_Id=$_POST['name'];
      // $Password=$_POST['pswd'];
      $query="select * from `admin` where `Used_Id`=`$_POST[User_Id]` and `Password`=`$_POST[Password]`";
      $result=mysqli_query($conn,$query);
      $count=mysqli_num_rows($result);
      if($count==1)
      {
        
        echo "login successfull";
      }
      else
      {
        echo "login failed";
      }
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
   <link rel="stylesheet" href="Admin_login.css">
</head>


  <!-- <script>
    function check()
    {
        var checkname =document.val_form.name.value;
        var checkpass=document.val_form.pswd.value;

        
        if(checkname=="" || checkname=="null")
        alert("Invalid Name");
        else if(checkpass.length<6)
     
        alert("Password must be at least 6 characters long.");
        else
            alert("Login sucessfull")
    }
    </script> -->


  <body>
    <div class="container">
      <form name="val_form" action="" method="post">
      <form action="#">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="User_Id" placeholder="Enter Your Email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="Password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
       <div><br>
        <h4><a href="#"><b>Forgot Password?</b></a></h4></div>
        <div class="input-box button">
          <input type="submit" name="submit" value="submit">
        </div><br>
        <!-- <p>Not a member?  <a href="#"> <b>Register here!</b></a></p> -->

      </form>
    </div>
  </body>

</html>

