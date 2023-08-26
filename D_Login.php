<?php
$conn = mysqli_connect ('localhost','root','','food_for_charity');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
   <link rel="stylesheet" href="Login_style.css">
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
            location.href="food.htm"
    }
    </script> -->


  <body>
    <div class="container">
      <form name="val_form" action="#" method="post">
      <form action="#">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="email" name="email" placeholder="Enter Your Email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="pass" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
       <div><br>
        <h4><a href="D_changepass.html"><b>Forgot Password?</b></a></h4></div>
        <div class="input-box button">
          <input type="submit" name="submit" value="submit">
        </div><br>
        <p>Not a member?  <a href="Donor_Reg_Form.html"> <b>Register here!</b></a></p>

      </form>
    </div>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

$query = "SELECT * FROM donor WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {

  
    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['mail'] = $email;
    require "Mail/phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='foodforcharity6494@gmail.com';
    $mail->Password='cvkgqeikisgybzjd';

    $mail->setFrom('foodforcharity6494@gmail.com', 'FoodForCharity');
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject="Your verify code";
    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
    <br><br>
    <p>With regrads,</p>
    <b>FoodForCharity";

            // if($mail->send()){
  
              if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo "Login Failed, Invalid Email "?>");
                    </script>
                <?php
            }else{
                ?>
                <script>
                    alert("<?php echo "Login Successfull, OTP sent to " . $email ?>");
                    window.location.replace('verify.php');
                </script>
                <?php
            }
}
}

?>
    
  </body>
  </html>
    