<?php

require 'includes/common.php';
?>
<html>
    <head>
        <title>index</title>
        <style>
            body{
                background: url(img3.jpg) no-repeat center;
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
                    <td class="text-danger"><b>POSITION</b></td>
                    <td class="text-danger"><b>NAME</b></td>
                                       <td class="text-danger"><b>POINTS</b></td>
                <td></td>
                </tr>
        <?php
        $c=0;
        
       ?>
                 <br />
      
        
                <?php
        $sel_query="Select name, points2 from users where submit2='1' order by points2 desc";
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
        $sel="Select balance,bal2 from users where id='$a'";
        $selres1=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr= mysqli_fetch_array($selres1);
        
        $bal1=25+$arr[1];
        $upd="Update users set balance='$bal1' where id='$a'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
        if($c>1){
        $sel="Select balance,bal2 from users where name='$b'";
        $selres1=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr= mysqli_fetch_array($selres1);
        
        $bal1=20+$arr[1];
        
        $upd="Update users set balance='$bal1' where name='$b'";
        $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));}
        ?>
        </div>
        
    </body>
</html>