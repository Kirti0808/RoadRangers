<html>
    <head>
        <title>index</title>
        <style>
            li{
                font-family: Gill Sans, sans-serif;
            }
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
       <ul class="nav navbar-nav">
        <li> 
            <?php if($arr[0]=='1'){ ?>
            <a href="r1table.php">ROUND 1 TABLE</a>
      </li>
      
      <li>
            <?php } if($arr[1]=='1'){ ?>
            <a href="r2table.php">ROUND 2 TABLE</a>
      </li>
       <li>
            <?php } if($arr[2]=='1'){ ?>
            <a href="r3table.php">ROUND 3 TABLE</a>
      </li>
       <li>
            <?php } if($arr[3]=='1'){ ?>
            <a href="r4table.php">ROUND 4 TABLE</a>
      </li>
      
            <?php } if($arr[0]=='1' || $arr[1]=='1' || $arr[2]=='1' || $arr[3]=='1') { ?>
      <li> <a href="leaderboard.php">LEADERBOARD</a> </li>
       </ul>
    
      <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
        <?php }
      if(!isset($_SESSION['email']))
      { ?>
     
          <li><a href="signup.php">SIGN-UP<span class="glyphicon glyphicon-user"></span></a></li>
          <li><A href="login.php">LOGIN<span class="glyphicon glyphicon-log-in"></span></a></li>
           </ul>
      <?php }
 else {?>
           <ul class="nav navbar-nav navbar-right">
          <li><a href="settings.php">SETTINGS</a></li>
              <li><a href="logout.php">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
             
          </ul>
          <?php
          } ?>   </div>
        </div>
        </nav>
    </body>
</html>