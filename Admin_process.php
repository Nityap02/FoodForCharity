<?php
if(isset($_POST['submit']))
{
	  	$conn1 = new mysqli("localhost","root","","food_for_charity");
		or die("Connection Failed...!");

		if(!empty($_POST['submit']))
		{
			$User_Id=$-GET['']
		}

	  if(isset($_POST['User_Id']) && isset($_POST['Password']))
       {
	      $name=$_POST['User_Id'];  
	      $password=$_POST['Password'];

 	     $sql1 = "SELECT pws FROM registration where name='$name'";
		 $result = $conn1->query($sql1);

		if($result->num_rows>0)
		 {
 			while($row = $result->fetch_assoc())
  			 {
    			if($row['pws']==$password)
    			 {
    			 	session_start();
    			 	$_SESSION['user']='user';
    			 echo "<script>location.href='Admin_panel.php.';</script>";
    			  //header("Location:SampleDB.php"); //php way of redirection
    			 } 	
    		    else
    		    echo "<script>alert('login unsuccessful');</script>";	
  			 }
         }
         else
          echo "<script>alert('login unsuccessful');</script>";
       }  
    }
   ?>