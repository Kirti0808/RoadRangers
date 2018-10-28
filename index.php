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

    <title>ROADRANGERS</title>

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
            <?php }  ?>

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="autoquiz/autoquiz_leaderboard.php">Autoquiz leaderboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="tables/leaderboard.php">leaderboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="settings.php">Settings</a>
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
             <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">CHECK OUT THE RULES!</a>
             </div>
        </div>
      </div>
    </header>
     <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">RULES and How to Play!</h2>
            <hr class="light my-4">
            <h3 class="section-heading text-white">Round 1(AUTOQUIZ)</h3>
          
            <p class="text-faded mb-4">1. It will be an online quiz event.<br />
                2. There will be questions of various types.<br />3. Correct answer will lead to <b>+10 marks</b>.<b> No negative marking</b> for incorrect answers.<br />4. Solving the current question is necessary in order to proceed to the next question.<br/>5. This round will run for 2 days. A question set will be uploaded after a specific time slot.<br />6. Time left for the event is shown at the top, before which you need to submit using the <b>"FINAL SUBMIT"</b> button. Note that it won't be submitting automatically.<br />7. Qualification of this round is necessary in order to proceed for Round 2. Top 20 gets qualified.</p>
            <h3 class="section-heading text-white">Round 2</h3>
          
            <p class="text-faded mb-4">1. This round will test your knowledge related to cars and automobiles.<br/>2. It is an onsite online round.<br />3. The partcipants will be dealt with a fixed budget which they need to use in order to buy different parts related to cars best suited for a given track.<br />4. All buying and selling would be on their own and there won't be any dealing of any kind among participants.<br />5. The participants have to buy all the parts in a specific track within the stipulated time, after which it will automatically submit.<br/>6. For the 1st subround, the partcipants can buy and sell any number of times, while for the 2nd,3rd and 4th subrounds, the selling money that they will get will be 50% with what they bought for actually.<br />7. The part that they bought in a subround will be continued for the next subrounds unless the participant sells them in the next subrounds.<br />8. There are no eliminations in the 1st subround, 5 gets eliminated in 2nd and 3rd subround and the top 3 from the last subround will be qualified for the last round of our flagship event, Transmission directly.<br />9. Ties will be broken on the basis of the balance remaining.<br />10. Separate leaderboards will be kept for each subround. Budget increment is awarded to the top 3 partcipants in a subround.</p>  
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#page-top">Get Started!</a>
          </div>
        </div>
      </div>
    </section>
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
