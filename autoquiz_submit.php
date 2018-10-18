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
  <title>Fabricate your dream </title>
    </head>
    <body>
       
        <?php
        include 'header1.php';
        $c=1;
        $sel="Select name,score from users order by score desc";
        $selres=mysqli_query($con,$sel);    
        
        ?>
         <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">LEADERBOARD</h1>
        <table class="table table-hover"  >
            <tr>
            <th style="text-align: center; color:red; font-family: 'Verdana', sans-serif;">No</th>
            <th style="text-align: center; color:red;">Name</th>
            <th style="text-align: center; color:red;">Score</th>
           
            </tr>
        <?php while($row=mysqli_fetch_array($selres))
        
        
             
                { ?>
        
            <tr>
                <td style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $c; ?></b></td>
                <td style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $row['name']; ?></b></td>
                
                <td  style="color:#F39C12    ; font-family: 'Verdana', sans-serif;"><b><?php echo $row['score']; ?></b></td>
                
            </tr>
            
        
            <?php 
            $c+=1;
        } ?>
        </table>
         <?php
         $sel="Select * from users order by score desc";
         $sel_q=mysqli_query($con,$sel) or die(mysqli_error($con));
         $uid=$_SESSION['id'];
         $upd="Update users set submit=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
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
             $upd="Update users set qual=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
         ?>
             <input type='button' class="btn btn-primary"onclick="location.href='shop.php'" value="Move to next round" />
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
    </body>
</html>

