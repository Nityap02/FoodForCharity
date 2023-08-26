<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify</title>
  <link rel="stylesheet" href="Login_style.css">

</head>
<body>
  <div class="container">
    <form name="val_form" action="#" method="post">
    <!-- <form action="#"> -->
      <div class="title">Verify OTP</div>
      <div class="input-box underline">
        <input type="otp" name="otp" placeholder="Enter OTP" required>
        <div class="underline"></div>
      </div>
      <div class="input-box button">
          <input type="submit" name="verify" value="verify">
        </div>

    </form>
  </div>
</body>
</html>

<?php 
    include('DBconn.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp = $_POST['otp'];

        if($otp != $otp){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            mysqli_query($conn, "UPDATE donor SET status = 1 WHERE email = '$email'");
            ?>
             <script>
                 alert("Account verified... you may donate now");
                   window.location.replace("food.htm");
             </script>
             <?php
        }

    }

?>