<?php
$conn = mysqli_connect ('localhost','root','','food_for_charity');
if($conn->connect_error)
{
    die('conncetion failed....!'.$conn->connect_error);
}
?>



