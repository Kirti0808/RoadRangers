<?php

require 'includes/common.php';
?>
<html>
    <head>
        <title>index</title>
        <style>
            th,td{
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
                    <td class="text-danger"><b>User Number</b></td>
                    <td class="text-danger"><b>User Name</b></td>
                                       <td class="text-danger"><b>POINTS</b></td>
                <td></td>
                </tr>
        <?php
        $c=0;
        
       ?>
                 <br />
       <div class="btn-group">
       <input type="button" class="btn btn-warning" onclick="location.href='r1table.php'" value="ROUND 1 TABLE"/>
       
       <input type="button" class="btn btn-warning" onclick="location.href='leaderboard.php'" value="LEADERBOARD"/>
       </div>
        
                <?php
        $sel_query="Select name, points1 from users where submit1='1' order by points1 desc";
        $sel_query_res=mysqli_query($con,$sel_query);
      
        while($row=mysqli_fetch_array($sel_query_res))
        {
            $c+=1;
            if($c==1)
                $a=$_SESSION['id'];
            else if($c==2)
                $b=$row[0];
            ?>
                <tr>
                <td><?php echo $c; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                </tr>
               <?php  } ?>
        </table>
        <?php
        $uid=$_SESSION['id'];
        $sel1="Select max(points2) from users";
        $selres1=mysqli_query($con,$sel1) or die(mysqli_error($con));
        $arr= mysqli_fetch_array($selres1);
        $m1=$arr[0];
        $sel="Select balance,bal1 from users where id='$a'";
        $selres1=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr= mysqli_fetch_array($selres1);
        
        $bal1=25+$arr[1];
        $upd="Update users set balance='$bal1' where id='$a'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
        if($c>1){
        $sel="Select balance,bal1 from users where name='$b'";
        $selres1=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr= mysqli_fetch_array($selres1);
        
        $bal1=20+$arr[1];
        
        $upd="Update users set balance='$bal1' where name='$b'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));}
        ?>
    </body>
</html>