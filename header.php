<html>
    <head>
        <title>index</title>
        <style>
            
        </style>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>  
    <body>
        <?php
        $uid=$_SESSION['id'];
        $sel="Select submit1,submit2,submit3,submit4 from users where id='$uid' ";
        $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr=mysqli_fetch_array($selres);
        ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php" style="font-family: 'Times New Roman', Times, serif; font-size:2em;"><b>HOME</b></a>
    </div>
       <ul class="nav navbar-nav">
        
           <li style="font-family: 'Times New Roman', Times, serif;"> 
            <?php if($arr[0]=='1'){ ?>
            <a href="r1table.php">ROUND 1 TABLE</a>
      </li>
      
      <li style="font-family: 'Times New Roman', Times, serif;">
            <?php } if($arr[1]=='1'){ ?>
            <a href="r2table.php">ROUND 2 TABLE</a>
      </li>
       <li style="font-family: 'Times New Roman', Times, serif;">
            <?php } if($arr[2]=='1'){ ?>
            <a href="r3table.php">ROUND 3 TABLE</a>
      </li>
       <li style="font-family: 'Times New Roman', Times, serif;">
            <?php } if($arr[3]=='1'){ ?>
            <a href="r4table.php">ROUND 4 TABLE</a>
      </li>
      
            <?php } if($arr[0]=='1' || $arr[1]=='1' || $arr[2]=='1' || $arr[3]=='1') { ?>
      <li> <a href="leaderboard.php">LEADERBOARD</a> </li>
       </ul>
    
      <div class="collapse navbar-collapse">
          
        <?php }
        
             
     
if(isset($_SESSION['email'])) {?>
            <li style="font-family: 'Times New Roman', Times, serif;"> 
            
            <a href="autoquiz_leaderboard.php">AUTOQUIZ LEADERBOARD</a>
      </li>
           <ul class="nav navbar-nav navbar-right">
          <li style="font-family: 'Times New Roman', Times, serif"><a href="settings.php">SETTINGS</a></li>
              <li style="font-family: 'Times New Roman', Times, serif"><a href="logout.php">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
             
          </ul>
          <?php
          } ?>   </div>
        </div>
        </nav>
    </body>
</html>