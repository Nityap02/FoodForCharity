<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food For Charity</title>
    <link rel="stylesheet" href="Style.css">
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
            window.location.href="B_submit.htm";
        }
        </script>

</head>
<body>

             <!-- Nav Bar -->
<div class="menu-bar">
    <h1 class="logo">foodfor<span>CHARITY</span></h1>
    <ul>
      <li><a href="Home.htm">Home</a></li>
      <li><a href="AboutUs.htm">About Us</a></li>
      <li><a href="Feedback.htm">Feedback</a> </li>
      <li><a href="#">Sign Up<i class="fas fa-caret-down"></i></a>
          <div class="dropdown-menu">
              <ul>
                <li><a href="Donor_Reg_Form.html">Donor</a></li>
                <li><a href="Volunteer_Reg_Form.htm">Volunteer</a></li>               
              </ul>
          </div>
      </li>
      <li><a href="#">Sign In<i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu">
            <ul>
              <li><a href="D_Login.php">Donor</a></li>
              <li><a href="V_Login.htm">Volunteer</a></li>               
            </ul>
        </div>
    </li>
      <!-- <li><a href="#">Contact us</a></li> -->
    </ul>
  </div>
                
   <!-- Body -->
   <div class="aboutus">
    
<div class="container">
    <!-- <h1 align="center"><u>Donor</u></h1><br><br> -->
    <h2>Beneficiary Details</h2>
    <br>
    <p>Staying relevant to our beneficiaries' needs is important, because without knowing who we serve, how will we serve them well?</p>    <br>
    <!-- <a href="Donor_Reg_Form.html" class="hover-links primary-button">Register as Donor</a> -->
    <br><br>
    <h3>Already Existing Beneficiaries</h3>
    <!-- Needy add Organization details -->
    <!-- <img src="Donation_steps.jpg" alt="Steps to Donate" class="center"> -->
    <div class="container">
      
    <h2 align="center" style="background-color:#183b56;color:white;">BENEFICIARY </h2>
    <!-- <input type="button"  value="ADD" onclick="add();" class="add"> -->
        <table width="100%"   border="1" cellpadding="30" cellspacing="0.1">
            <thead>

                <tr bgcolor="#183b56" text="white">
                    <th style="background-color:#183b56;color:white;">ID </th>
                    <th style="background-color:#183b56;color:white;">NAME </th>
                    <th style="background-color:##183b56;color:white;">ADDRESS </th> 
                    <th style="background-color:#183b56;color:white;">PINCODE</th>
                    <th style="background-color:#183b56;color:white;">CONTACT-NO</th>
                    <th style="background-color:#183b56;color:white;">Image</th>
                    <!-- <th  style="background-color:#183b56;color:white;">Select Beneficary -->
                        <!-- </th> -->
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
    <!-- <td><a href="<?php echo $row['B_Id']; ?>" >&nbsp;&nbsp;&nbsp;&nbsp;<input type="RADIO" name="optben" ></a></td> -->
   
  <?php
}



?>
<!-- <input type="button"  value="Submit"  class="edit" onclick="thank();"> -->
</table>
    </div>
</div>
</div>  
 <!-- footer -->
 <footer>
    <div class="container flex footer-container">
        <a href="#" class="company-logo">
          <img src="Images/logo.png" alt="Image of Logo">  
        </a>
        <div class="link-column flex"><h3>Quick Access</h3>
            <a href="Home.htm" class="hover-link">Home</a>
            <a href="AboutUs.htm" class="hover-link">About us</a>
            <a href="Feedback.htm" class="hover-link">Feedback</a>
            <a href="Home.htm" class="hover-link">Goto Top</a>
        </div>
        <div class="link-column flex">
            <h3>Contact Us</h3>      
            <a href="tel:9353509526"><i class="fa-solid fa-phone"></i> Click to call.</a>     
            <a href="mailto:foodforcharity6494@gmail.com" class="hover-link"><i class="fa fa-envelope icon"></i> E-mail : foodforcharity6494@gmail.com</a>     
        </div>
    </div>
</footer>

       <!-- sub footer -->

<div class="subfooter">
    <div class="container flex subfooter-container">
         <a href="#" class="hover-link"><u>foodforCHARITY</u> &nbsp; an interface between Donor and Needy.</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="#" class="hover-link">Last updated on: &nbsp; 26<sup>th</sup> Jan  2023</a>
    </div>
</div>
<script src="scroll_img.js"></script>
<script src="https://kit.fontawesome.com/0e255da9e2.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0e255da9e2.js" crossorigin="anonymous"></script>   
</body>
</html>
    