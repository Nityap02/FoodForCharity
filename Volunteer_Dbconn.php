<?php

$v_Fname =$_POST['v_Fname'];
$v_add =$_POST['v_add'];
$v_pin =$_POST['v_pin'];
$v_email =$_POST['v_email'];
$v_phn =$_POST['v_phn'];
$v_pass = $_POST['v_pass'];
$v_RTpass=$_POST['v_RTpass'];

$conn = new mysqli('localhost','root','','food_for_charity');

if($conn->connect_error)
{
    die('conncetion failed....!'.$conn->connect_error);
}
else{

    if(isset($_POST['submit']))
{
  $stmt=$conn->prepare("Insert into volunteer values (0,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssisiss",$v_Fname,$v_add,$v_pin,$v_email,$v_phn,$v_pass,$v_RTpass);
    $execval=$stmt->execute();
   
    header("Location:V_Login.htm", TRUE, 301);
    echo $execval;
    $stmt->close();
    $conn->close();
    
}
}

?>