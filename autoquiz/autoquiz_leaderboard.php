<?php
require 'includes/common.php';
$email=$_SESSION['email'];


?>
<html>
    <head>
       
        <meta charset="UTF-8">
       <link rel="stylesheet" href="css4/style.css">
   
  
  <title>AUTOQUIZ </title>
    </head>
    <body>
        
        <?php
          $c=1;
        $sel="Select name,score,submitdate from users order by score desc, submitdate asc";
        $selres=mysqli_query($con,$sel);    
        
        ?>
         <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">LEADERBOARD</h1>
        <table>
            <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Score</th>
           <th>Time</th>
            </tr>
            </thead>
            <tbody>
        <?php while($row=mysqli_fetch_array($selres))
        
        
             
                { ?>
        
            <tr>
                <td><b><?php echo $c; ?></b></td>
                <td><b><?php echo $row['name']; ?></b></td>
                
                <td><b><?php echo $row['score']; ?></b></td>
                 <td><b><?php echo $row['submitdate'] ; ?></b></td>
                
            </tr>
            
        
            <?php 
            $c+=1;
        } ?>
            </tbody>
        </table>
        
    </body>
</html>
