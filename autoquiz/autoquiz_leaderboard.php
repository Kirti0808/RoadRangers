<?php
require 'includes/common.php';
$email=$_SESSION['email'];


?>
<html>
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color:#E5E7E9;
      }
      .caption{
          position: absolute;
          left:35%;
          bottom: 45%;
      }
      .container1{
          text-align: center;
          position: relative;
      }
     body{
      background: url(img4.jpg) no-repeat center;
      background-size: 100% 130%;
      background-position-y: 5px;
      }
      td,th{
           padding: 30px;
           width: 20%;
          text-align: center;
          font-family: 'Gill Sans', sans-serif;
      }
      
  </style>      
  <title>AUTOQUIZ </title>
    </head>
    <body>
        
        <?php
        include 'header1.php';
        $c=1;
        $sel="Select name,score,submitdate from users order by score desc, submitdate asc";
        $selres=mysqli_query($con,$sel);    
        
        ?>
        <div class="container">
         <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">LEADERBOARD</h1>
        <table class="table table-hover"  >
            <tr>
            <th style="text-align: center; color:red; font-family: 'Verdana', sans-serif;">No</th>
            <th style="text-align: center; color:red;">Name</th>
            <th style="text-align: center; color:red;">Score</th>
           <th style="text-align: center; color:red;">Time</th>
            </tr>
        <?php while($row=mysqli_fetch_array($selres))
        
        
             
                { ?>
        
            <tr>
                <td style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $c; ?></b></td>
                <td style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $row['name']; ?></b></td>
                
                <td  style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $row['score']; ?></b></td>
                 <td  style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $row['submitdate'] ; ?></b></td>
                
            </tr>
            
        
            <?php 
            $c+=1;
        } ?>
        </table>
        </div>
    </body>
</html>
