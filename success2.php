<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>index</title>
        <style>
            body{
                background: url(img2.jpg) no-repeat center;
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
    </head>  
    <body>
       <?php 
       include 'header.php';
       ?>
        <div class="container">
        <table class="table table-hover">
                <tr>
                    <td class="text-danger"><b>Item Number</b></td>
                    <td class="text-danger"><b>Item Name</b></td>
                    <td class="text-danger"><b>Type</b></td>
                    <td class="text-danger"><b>COST</b></td>
                <td></td>
                </tr>
       
                    <br />
       
                <?php
 $user_id=$_SESSION['id'];
    $select_query="Select * from items_users where user_id='$user_id'";
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
       $r=0;
        while($row= mysqli_fetch_array($select_query_res))
    {
        $sum=$sum+$row[3];
        $r=$r+$row['rating2'];
        
        $c+=1;
        ?>

                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2];   ?></td>
    <td><?php echo $row[3]; }?></td> 
                    <td class="text primary"> Confirmed!</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
    <td><?php echo $sum; }  ?></td>
                    <td></td>
                    
                </tr>
            </table>
        <h3>Your rating for this round is: <?php echo $r; ?></h3>
        <?php
       
        $upd="Update users set points2='$r' where id='$user_id'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
         $sel="Select totalpoints,points1,points2,points3,points4,balance,submit2 from users where id='$user_id'";
        $sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr=mysqli_fetch_array($sel_res);
        $balance=$arr[5];
        $tp=$arr[1]+$arr[2]+$arr[3]+$arr[4];
        $upd="Update users set totalpoints='$tp' where id='$user_id'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
        if($arr['submit2']==0){
        $upd="Update users set bal2='$balance' where id='$user_id'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));}
         $upd="Update users set submit2='1' where id='$user_id'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
        ?>
        <?php
         $sel="Select * from users order by totalpoints desc";
         $sel_q=mysqli_query($con,$sel) or die(mysqli_error($con));
         $uid=$_SESSION['id'];
        
         $i=0;
         $k=0;
         while($row=mysqli_fetch_array($sel_q))
         {
             
             if($i==3)
                 break;
             else{
                 if($_SESSION['id']==$row['id']){
                     $k=1;
                 ?>
         
      <div class="container">
         <div class="jumbotron">
             <h3>Congratulations! You've qualified for next round! </h3>
             <?php
             $upd="Update users set qual2=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
         ?>
             <input type='button' class="btn btn-primary"onclick="location.href='shop3.php'" value="ROUND3" />
         </div>
         <?php 
                break;
             }
             $i+=1;
             }
             
         }
         ?>
<?php         if($k!=1){
    ?>
      </div>
         <div class="container">
         <div class="jumbotron" >
        <h3>
            Sorry! You've been eliminated!
        </h3>
</div>
         <?php
}
         ?>
    </div>
        
        
        </div>
        <?php
       
         $sel="Select * from users order by points2 desc";
         $sel_q=mysqli_query($con,$sel) or die(mysqli_error($con));
         $uid=$_SESSION['id'];
        
         $i=1;
         $k=0;
         $sel="Select balance,bal2 from users where id='$uid'";
                     $sel_q1=mysqli_query($con,$sel) or die(mysqli_error($con));
                     $arr=mysqli_fetch_array($sel_q1);
         $bal=$arr[0];
         while($row=mysqli_fetch_array($sel_q))
         {
             
             
                 if($_SESSION['id']==$row['id']){
                     $k=1;
                     $sel="Select balance,bal2 from users where id='$uid'";
                     $sel_q=mysqli_query($con,$sel) or die(mysqli_error($con));
                     $arr=mysqli_fetch_array($sel_q);
                     if($i==1){
                        $bal=$arr[1]+25;
                        break;
                     }
                     else if($i==2){
                         $bal=$arr[1]+20;
                         break;
                     }
                    
                 }
                 $i+=1;
         }
                     $upd="Update users set balance='$bal' where id='$uid'";
                     $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
                     
                    
                 ?>
        
        
    </body>
  </html>