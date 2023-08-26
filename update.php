<!DOCTYPE html>
<head>
    <title>Update Details </title>
</head>
<html>
<body>
<?php 
    include ("DBconn.php");
    $id=$_GET['id'];
    $Record=mysqli_query($conn,"select * from Beneficiary where B_Id=$id");
    $data=mysqli_fetch_array($Record);
    ?>
<form name="bf" method="POST" action="Beneficiary.php" enctype="multipart/form-data">
        <div align="center">
        <h1>BENIFICIARY DETAAILS</h1><br>
         Name :
        <input type="text" name="B_Name" value="<?php echo $data['B_Name']; ?>" ><br><br>
        Address :
         <input type="text" name="B_Address" value="<?php echo $data['B_Address']; ?>"><br><br>
         Pincode:
         <input type="number" name="B_pin" value="<?php echo $data['B_pin']; ?>"><br><br>
         Contact No :
          <input type="number" name="B_ContactNo" value="<?php echo $data['B_ContactNo']; ?>"><br><br>
         <br>
         <img src="<?php echo $data['B_Image']; ?>"
            width="100px" height="100px"><br> Upload Image :
           <input type="file" name="B_Image">
            <br><br><br><br>
            <input type="submit" name="submit" value="UPDATE" 
            onclick="window.location.href = Beneficiary.php"; >
            </div>
    </form>

</body>
</html>