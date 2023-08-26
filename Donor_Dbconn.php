<?php

$Fname =$_POST['Fname'];
$add =$_POST['add'];
$pin =$_POST['pin'];
$email =$_POST['email'];
$phn =$_POST['phn'];
$pass = $_POST['pass'];
$RTpass=$_POST['RTpass'];

$conn = new mysqli('localhost','root','','food_for_charity');

if($conn->connect_error)
{
    die('conncetion failed....!'.$conn->connect_error);
}
else{

    if(isset($_POST['submit']))
{
  $stmt=$conn->prepare("Insert into donor values (0,?,?,?,?,?,?,?,0)");
    $stmt->bind_param("ssisiss",$Fname,$add,$pin,$email,$phn,$pass,$RTpass);
    $execval=$stmt->execute();
    // echo "Registration successfull ";
    header("Location:D_Login.php", TRUE, 301);
    echo $execval;
    $stmt->close();
    $conn->close();
    
}
}

?>