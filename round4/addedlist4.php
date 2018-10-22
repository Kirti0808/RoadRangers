<?php
require 'includes/common.php';
$uid=$_SESSION['id'];
$sel="Select submit4,qual,qual1,qual2,qual3 from users where id='$uid'";
$sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr=mysqli_fetch_array($sel_res);
if($arr[0]==1)
    header('Location:../index.php');
else if($arr[1]==0 || $arr[2]==0 || $arr[3]==0)
{header('Location:../index.php'); }
?>

<html>
    <head>
        <title>index</title>
        <style>
            body{
                background: url(img11.jpg) no-repeat center;
                background-size: cover;
            }
            table th,td{
                text-align: center;
                
               
                
            }
            table th{
                font-family: Verdana, sans-serif;
            }
            td{
                
                font-size: 1.5em;
                font-family: Georgia, serif;
            }
        </style>
        <link rel="stylesheet" href="style.css" />
         <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="auto-submit4.js"></script>
    </head>  
    <body>
      <?php
      include 'header1.php';
      ?>
        <div class="container"> 
            <div><h2 style="color:#3498DB   ; float: right; font-family: Verdana, Arial, Helvetica, sans-serif"><b>Time left: <span id="time" class="text-danger"></span></b></h2></div>
      
        <table class="table table-hover">
                <tr>
                    <td class="text-primary"><b>Item Number</b></td>
                    <td class="text-primary"><b>Item Name</b></td>
                    <td class="text-primary"><b>Type</b></td>
                    <td class="text-primary"><b>COST</b></td>
                <td></td>
                </tr>
        
                    <br />
       <div class="btn-group">
        <input type="button" class="btn btn-primary" onclick="location.href='shop4.php'" value="FIND ITEMS"/>
        <br />
       </div>
                    <br />
                <?php
 $user_id=$_SESSION['id'];
    $select_query="Select * from items_users where userid='$user_id'";
    $select_query_1="Select * from items i inner join items_users iu on i.id=iu.itemid where userid='$user_id'";
    $select_query_2="Select *from users u inner join items_users iu on u.id=iu.userid";
    $select_query_res=mysqli_query($con,$select_query_1) or die(mysqli_error($con));
    $no_of_rows= mysqli_num_rows($select_query_res);
    if($no_of_rows==0)
    {
        ?>
        <br />
        <br />
        <?php
        echo "<h3>Add items to list first</h3>";
    }
    else{
        $sum=0;
        $c=0;
       
        while($row= mysqli_fetch_array($select_query_res))
    {
        $sum=$sum+$row[3];
        
        $c+=1;
        ?>

                <tr>
                    <td class="text-danger"><?php echo $c; ?></td>
                    <td class="text-danger"><?php echo $row[1]; ?></td>
                    <td class="text-danger"><?php echo $row[2];   ?></td>
                    <td class="text-danger"><?php echo $row[3]; ?></td> 
    <td class="text-danger"> <a href='removeitem4.php?id=<?php echo $row[0]?>' class='remove_item_link'> Remove</a><?php } ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-primary">Total</td>
                <td class="text-danger"><?php echo $sum; }   ?></td>
                <td><input type="button" class="btn btn-primary" onclick="location.href='success4.php'" value="Confirm" /></td>
                    
                </tr>
            </table>
        </div>
    </body>
  </html>