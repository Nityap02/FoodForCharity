<?php
   $email = $_POST['email'];
   $password = $_POST['pass'];
   // Database connection here
   $con = new mysqli('localhost','root','','food_for_charity');
   if($con->connect_error) {
   die("Failed to connect : ".$con->connect_error);
   } else {
   $stmt = $con->prepare("select * from donor where email = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0) {
   $data = $stmt_result->fetch_assoc();
   if($data['pass'] === $pass){
    echo"<h2>Login Success</h2>";
   }
   else{
    echo"<h2>Login UnSuccess</h2>";

   }
   } else {
   echo "<h2>Invalid Email or password</h2>";
   }
  } 
   
?>  
