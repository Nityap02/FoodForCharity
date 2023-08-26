<?php
include ("DBconn.php");
$id=$_GET['id'];
echo $id;
$query = "delete from Beneficiary where B_Id=$id";
$query_run=mysqli_query($conn,$query);
header('location:Beneficiary_Details.php');
?>