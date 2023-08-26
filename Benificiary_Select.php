<!DOCTYPE html>
<html>
    <head>
    <title>Beneficiary_Details</title>
    <style>
        .edit{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .delete{
            background-color:red;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .add{
            background-color:orange;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        </style>
    <script>
        function thank()
        {
            window.location.href="D_Submit.html";
        }
        </script>
</head>
    <body>
    <h1 align="center" style="background-color:#183b56;color:white;">SELECT BENEFICIARY </h1>
        <!-- <input type="button"  value="ADD" onclick="add();" class="add"> -->
            <table width="99%"   border="1" cellpadding="30" cellspacing="0.1">
                <thead>
    
                    <tr bgcolor="#183b56" text="white">
                        <th style="background-color:#183b56;color:white;">ID </th>
                        <th style="background-color:#183b56;color:white;">NAME </th>
                        <th style="background-color:##183b56;color:white;">ADDRESS </th> 
                        <th style="background-color:#183b56;color:white;">PINCODE</th>
                        <th style="background-color:#183b56;color:white;">CONTACT-NO</th>
                        <th style="background-color:#183b56;color:white;">Image</th>
                        <th  style="background-color:#183b56;color:white;">Select Beneficary
                            </th>
                    </tr>
                </thead>
                
<?php

$conn=mysqli_connect("localhost","root","","food_for_charity");
$query = "Select * from Beneficiary";
$query_run=mysqli_query($conn,$query);
// $total=mysqli_num_rows($data);
// echo "$total";

// if($total!=0)
// {
//     echo $total;
//     echo" Records found <br><br>";
    // $result=mysqli_fetch_assoc($data);
    while($row=mysqli_fetch_assoc($query_run))
    {
      ?>
      <tr>
        <td> <?php echo  $row['B_Id']; ?> </td>
        <td> <?php echo $row['B_Name']; ?> </td>
        <td> <?php echo $row['B_Address']; ?> </td>
        <td> <?php echo $row['B_pin']; ?> </td>
        <td> <?php echo $row['B_ContactNo']; ?> </td>
        <td> 
        <img src="<?php echo $row['B_Image']; ?>" width="175" height="100"  > </td>
        <td><a href="<?php echo $row['B_Id']; ?>" ><input type="RADIO" name="optben" ></a></td>
       
      <?php
    }
    
   
    
    ?>
    <input type="button"  value="Submit"  class="edit" onclick="thank();">
    </table>
</form>
</body>
</html>