<!DOCTYPE html>
<?php 
require 'includes/common.php';

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>
   <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="https://avskr.in">AAVISHKAR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
        <?php 
                                            if(isset($_SESSION['email'])) {?>
                                               
                                                 <?php $uid=$_SESSION['id'];
                                              $sel="Select submit1,submit2,submit3,submit4,score,submit from users where id='$uid'";
                                              $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                                              $arr=mysqli_fetch_array($selres);
                                              $s=$arr['score'];
                                              $i=($s/10)+1;
                                              if($arr[0]=='0') { ?>
        
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="round1/shop.php">Play Round 1</a>
            </li>
            <?php }
                                               else if($arr[0]=='1' &&$arr[1]=='0') { ?>
           
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="round2/shop2.php">Play Round 2</a>
            </li>
             <?php } 
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='0') { ?>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="round3/shop3.php">Play Round 3</a>
            </li>
             <?php }
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='0') { ?>
             <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="round4/shop4.php">Play Round 4</a>
            </li>
                                              <?php }
             else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='1') { ?>
             <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="round4/success4.php">Play Round 4</a>
            </li>
            <?php } if($arr['submit']=='0'){ ?>
            
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz.php?id=<?php echo $i; ?>">Autoquiz</a>
            </li>
            <?php }  else { ?>
             <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz_leaderboard.php">Autoquiz</a>
            </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz_leaderboard.php">Autoquiz leaderboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="tables/leaderboard.php">leaderboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
             <?php }
                                                else { ?>
            
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
              <?php  } ?>
            </ul>				 
						
          
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>ROADRANGERS</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">DESIGN THE BEST CAR OUT OF THE GIVEN BUDGET!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
