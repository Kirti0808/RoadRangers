<?php
require 'includes/common.php';
 $uid=$_SESSION['id'];
$sel="Select submit2 from users where id='$uid'";
$sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr=mysqli_fetch_array($sel_res);
if($arr[0]==1)
    header('Location:index.php');
?>

<html>
    <head>
        <title>index</title>
        <style>
            td,th{
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="style.css" />
         <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>  
    <body>
      
        
        <table class="table table-hover">
                <tr>
                    <td class="text-danger"><b>Item Number</b></td>
                    <td class="text-danger"><b>Item Name</b></td>
                    <td class="text-danger"><b>Type</b></td>
                    <td class="text-danger"><b>COST</b></td>
                <td></td>
                </tr>
        
                    <br />
       <div class="btn-group">
        <input type="button" class="btn btn-warning" onclick="location.href='shop2.php'" value="FIND ITEMS"/>
        <input type="button" class="btn btn-warning" onclick="location.href='r1table.php'" value="ROUND 1 TABLE"/>
       <input type="button" class="btn btn-warning" onclick="location.href='r2table.php'" value="ROUND 2 TABLE"/>
       <input type="button" class="btn btn-warning" onclick="location.href='leaderboard.php'" value="LEADERBOARD"/>
       </div>
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
                    <td><?php echo $c; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2];   ?></td>
                    <td><?php echo $row[3]; ?></td> 
    <td> <a href='removeitem2.php?id=<?php echo $row[0]?>' class='remove_item_link'> Remove</a><?php } ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                <td><?php echo $sum; }   ?></td>
                <td><input type="button" class="btn btn-primary" onclick="location.href='success2.php'" value="Confirm" /></td>
                    
                </tr>
            </table>
    </body>
  </html>