<!DOCTYPE html>
<html>
    <head>
    <title>Donor_Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("tr:odd").css("background-color", "lightgrey");
});
</script>
<style>
   h1 {
  color: black;
}
 </style> 
</head>
    <body>
        <h2>
            <table border="1" style="width:99%;" cellpadding="20" cellspacing="0">
                    <tr bgcolor="#">
                       <h1 align="center" style="background-color:#183b56;color:white;"><b> DONOR DETAILS <b></h1>
                <th  style="background-color:#183b56;color:white;">ID </th>
                <th  style="background-color:#183b56;color:white;">NAME </th>
                <th style="background-color:#183b56;color:white;">ADDRESS </th>
                <th  style="background-color:#183b56;color:white;">PINCODE</th>
                <th style="background-color:#183b56;color:white;">EMAIL </th>
                <th style="background-color:#183b56;color:white;">CONTACT-NO</th>
            </tr></h2>
<?php
// error_reporting(0);
include("DBconn.php");
$query = "Select * from Donor";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
// echo "$total";

if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    echo"
    <tr>
    <td>". $result['id'] ."</td>
    <th>". $result['Fname'] ."</th>
    <th>". $result['add'] ."</th>
    <th>". $result['pin'] ."</th>
    <th>". $result['email'] ."</th>
    <th>". $result['phn'] ."</th>
    </tr>";
}
else{
    echo "No records found";
}
?>
</body>
</html>
