<?php
$conn=mysqli_connect('localhost', 'root', '', 'food_for_charity');
$sql=mysqli_query($conn,"select * from donor");

if(isset($_GET['id']) && isset($_POST['status'])){
   $id=$_GET['id'];
   $status=$_GET['status'];
   mysqli_query($conn,"update login set status='$status' where id='$id'");
   header("location:Approval_Request.php");
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request for approval</title>
    <style type="text/css">
       *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
        }
        body{
            background: #ccc;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }
        .container{         
            width: 100%;
            max-width:900px;  
            margin: 8rem auto;          
        }
        .container table{
            width: 100%;
            margin: auto;
            border-collapse: collapse;
            font-size: 1.5rem ;
        }
        .container table th{
            background: #183b56 ;
            color: #fff;
        }
        select{
            width: 100% ;
            padding : 0.5rem 0;
            font-size: 1rem ;
        }

    </style>
</head>
<body>
    <div class="container">
        <table border="1" >
            <tr>
            <th><h3>SI.No.</h3></th>
            <th><h3>Username</h3></th>
            <!-- <th>Date Time</th> -->
            <!-- <th>Status</th> -->
            <th><h3>Action</h3></th>
            </tr>
            <?php 
            $i=1;
            if(mysqli_num_rows($sql)>0){
            while($row=mysqli_fetch_assoc($sql)){ ?>
            <tr>
                <td align="center"><?php echo $i++ ?></td>
                <td><?php echo $row['email'] ?></td>
                <!-- <td align="center"><?php echo $row['added_on'] ?></td> -->
                 <!-- <td>
                    <?php 
                      if($row['status']==1){
                        echo "Pending";
                    } if($row['status']==2){
                        echo "Accept";
                    } if($row['status']==3){
                        echo "Reject";
                    }
                    ?>
                    </td>  -->
                    <td>
                        <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">
                        <option value="">Update Status</option>
                        <option value="1">Pending</option>
                        <option value="2">Accept</option>
                        <option value="3">Reject</option>
                        </select>
                    </td>
            </tr>

            <?php }
           } ?>
        </table>
    </div>

<script type="text/javascript">
    function status_update(value, id){
        // alert(value);
        window.location.href="68-phpEmail.php";
       
        // let url= "http://localhost/Final/Approval_Request.php";
        // window.location.href= url+"?id="+id+"&status="+value;
    }

</script>
</body>
</html>