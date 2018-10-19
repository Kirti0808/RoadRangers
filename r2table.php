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
        include 'header1.php';
        ?>
        <div class="container">
        <table class="table table-hover">
                <tr>
                    <td class="text-danger"><b>POSITION</b></td>
                    <td class="text-danger"><b>NAME</b></td>
                                       <td class="text-danger"><b>POINTS</b></td>
                                       <td class="text-danger"><b>BALANCE</b></td>
                <td></td>
                </tr>
        <?php
        $c=0;
        
       ?>
                 <br />
      
        
                <?php
        $sel_query="Select name, points2,balance from users where submit2='1' order by points2 desc,balance desc";
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
                <td><?php echo $row[2]; ?></td>
                </tr>
               <?php  } ?>
        </table>
        
        </div>
        
    </body>
</html>