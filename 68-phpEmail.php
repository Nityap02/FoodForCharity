<?php
    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    try 
    {
    $mail = new PHPMailer();
    // $mail->SMTPDebug = 1;           //Enable verbose debug output      
    $mail->Mailer = "smtp";            
    $mail->isSMTP();               //Send using SMTP                   
    $mail->Host       = 'smtp.gmail.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;        //$mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";  //Enable SMTP authentication
    $mail->Username   = "foodforcharity6494@gmail.com";     //SMTP username
    $mail->Password   = "cvkgqeikisgybzjd";      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 465;
    //TCP port to connect to; use 587
    // if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->AddAddress("foodforcharity6494@gmail.com", "FoodForCharity");
    $mail->SetFrom("foodforcharity6494@gmail.com", "FoodForCharity");
    $mail->AddReplyTo("nitya6494@gmail.com", "Nitya");
    // $mail->AddCC("nitya6494@gmail.com", "Nitya P");
    $mail->Subject = "FoodForCharity";
    $content = "<b>Your request for volunteer hbas been accepted.</b>";
    //Recipients
    $mail->setFrom('foodforcharity6494@gmail.com', 'FoodForCharity');
    $mail->addAddress('nitya6494@gmail.com');      //Name is optional
    $mail->addAddress('nitya6494@gmail.com', 'Nitya P');   //Add a recipient,       
   //Content
    $mail->isHTML(true);                             //Set email format to HTML
    $mail->Body    = 'Request for volunteer has been accepted.</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    echo '<script>alert("Message has been sent.")</script>';
    header('location: Approval_Request.php');
  }
  catch(Exception $e) 
    {
     echo "<h3> Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 ?>   

