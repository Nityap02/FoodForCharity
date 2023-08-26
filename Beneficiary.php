<?php
include 'DBconn.php';
if(isset($_POST['submit']))
{
  $B_Name =$_POST['B_Name'];
  $B_Address =$_POST['B_Address'];
  $B_pin =$_POST['B_pin'];
  $B_ContactNo =$_POST['B_ContactNo'];
  $B_Image =$_FILES['B_Image'];
  //  print_r($B_Image);
  $img_loc =$_FILES['B_Image']['tmp_name'];
  $img_name =$_FILES['B_Image']['name'];
  $img_des ="uploads/".$img_name;
  move_uploaded_file($img_loc,'uploads/'.$img_name);
  
  mysqli_query($conn,"INSERT INTO
   `beneficiary`( `B_Name`, `B_Address`, `B_pin`, `B_ContactNo`, `B_Image`)
   VALUES ('$B_Name',' $B_Address',$B_pin,'$B_ContactNo','$img_des')");
   //echo "Entered successfully";
  //  header("location:href=Benificiary_Details.php", TRUE, 301);
   header("Location:Beneficiary_Details.php", TRUE, 301);

}
?>