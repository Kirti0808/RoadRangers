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
     
                  <?php
        $sel_query="Select name, totalpoints from users order by totalpoints desc";
        $sel_query_res=mysqli_query($con,$sel_query);
      
        while($row=mysqli_fetch_array($sel_query_res))
        {
            $c+=1;
            ?>
                <tr>
                <td><?php echo $c; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                </tr>
               <?php  } ?>
        </table>
    </body>
</html>