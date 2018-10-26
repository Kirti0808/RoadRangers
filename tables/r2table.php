<?php

require 'includes/common.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Table</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
       <script src="auto-submit4.js"></script>
     <style>
.button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
</style>

  
</head>

    <body>
        
        <div class="container">
       
        <table class="table table-hover">
            <thead>    
            <tr>
                    <th><b>POSITION</b></th>
                    <th><b>NAME</b></th>
                                       <th><b>POINTS</b></th>
                                        <th><b>BALANCE</b></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
        <?php
        $c=0;
        
       ?>
                 <br />
       
        
                <?php
        $sel_query="Select name, points1,bal2 from users where submit2='1' order by points2 desc, bal2 desc";
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
        </tbody>
        </table>
        <?php
        
        ?>
        </div>
    </body>
</html>