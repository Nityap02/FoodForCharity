<!DOCTYPE html>
<html>
    <head>
    <title>Volunteer_Details</title>
    <style>
         h1 {
            color: black;
            }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    </script>
    </head>
<script>
$(document).ready(function(){
  $("tr:odd").css("background-color", "lightgrey");
});
</script>
</head>
    <body>
        <h2>
        <table border="1" style="width:99%;" cellpadding="20" cellspacing="0">
                    <tr bgcolor="#183b56">
               <h1 align="center"style="background-color:#183b56;color:white;"> VOLUNTEER DETAILS </h1>
                <th style="background-color:#183b56;color:white;">ID </th>
                <th style="background-color:#183b56;color:white;">NAME </th>
                <th style="background-color:#183b56;color:white;">ADDRESS </th>
                <th style="background-color:#183b56;color:white;">PINCODE</th>
                <th style="background-color:#183b56;color:white;">EMAIL </th>
                <th style="background-color:#183b56;color:white;">CONTACT-NO</th>
            </tr></h2>
<?php
// error_reporting(0);
include("DBconn.php");
$query = "Select * from volunteer";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
// echo "$total";

if($total!=0)
{
    // echo $total;
    // echo" Records found <br><br>";
    // $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))
    echo"
    <tr>
    <td>". $result['v_Id'] ."</td>
    <th>". $result['v_FName'] ."</th>
    <th>". $result['v_add'] ."</th>
    <th>". $result['v_pin'] ."</th>
    <th>". $result['v_email'] ."</th>
    <th>". $result['v_phn'] ."</th>
    </tr>";
        

}
else{
    echo "No records found";
}
?>
</body>
</html>
