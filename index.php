<!DOCTYPE html>
<?php 
require 'includes/common.php';

?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SAE ONLINE EVENT</title>
		<meta name="description" content="An experimental 3D room template that aims to show exhibition details in an interesting way" />
		<meta name="keywords" content="3d, room, exhibition, gallery, perspective, animation, web design, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-menu" viewBox="0 0 24 24">
				<title>menu</title>
				<path d="M24,5.8H0v-2h24V5.8z M19.8,11H4.2v2h15.6V11z M24,18.2H0v2h24V18.2z"/>
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 24 24">
				<title>cross</title>
				<path d="M13.4,12l7.8,7.8l-1.4,1.4l-7.8-7.8l-7.8,7.8l-1.4-1.4l7.8-7.8L2.7,4.2l1.4-1.4l7.8,7.8l7.8-7.8l1.4,1.4L13.4,12z"/>
			</symbol>
			<symbol id="icon-info" viewBox="0 0 20 20">
				<title>info</title>
				<circle style="fill:#fff" cx="10" cy="10" r="9.1"/>
				<path d="M10,0C4.5,0,0,4.5,0,10s4.5,10,10,10s10-4.5,10-10S15.5,0,10,0z M10,18.6c-4.7,0-8.6-3.9-8.6-8.6S5.3,1.4,10,1.4s8.6,3.9,8.6,8.6S14.7,18.6,10,18.6z M10.7,5C10.9,5.2,11,5.5,11,5.7s-0.1,0.5-0.3,0.7c-0.2,0.2-0.4,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3C9.1,6.2,9,6,9,5.7S9.1,5.2,9.3,5C9.5,4.8,9.7,4.7,10,4.7C10.3,4.7,10.5,4.8,10.7,5z M9.3,8.3h1.4v7.2H9.3V8.3z"/>
			</symbol>
		</svg>
		<div class="container">
			<div class="scroller">
				<div class="room room--current">
					<div class="room__side room__side--back">
						<img class="room__img" src="img/set4/3.jpg" alt="Some image"/>
						<img class="room__img" src="img/set4/6.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--left">
						<img class="room__img" src="img/set4/7.jpg" alt="Some image"/>
						<img class="room__img" src="img/set4/1.jpg" alt="Some image"/>
						<img class="room__img" src="img/set4/2.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--right">
						<img class="room__img" src="img/set4/4.jpg" alt="Some image"/>
						<img class="room__img" src="img/set4/5.jpg" alt="Some image"/>
						<img class="room__img" src="img/set4/8.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
				<div class="room">
					<div class="room__side room__side--back">
						<img class="room__img" src="img/set2/1.jpg" alt="Some image"/>
						<img class="room__img" src="img/set2/6.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--left">
						<img class="room__img" src="img/set2/3.jpg" alt="Some image"/>
						<img class="room__img" src="img/set2/4.jpg" alt="Some image"/>
						<img class="room__img" src="img/set2/5.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--right">
						<img class="room__img" src="img/set2/8.jpg" alt="Some image"/>
						<img class="room__img" src="img/set2/7.jpg" alt="Some image"/>
						<img class="room__img" src="img/set2/2.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
				<div class="room">
					<div class="room__side room__side--back">
						<img class="room__img" src="img/set3/1.jpg" alt="Some image"/>
						<img class="room__img" src="img/set3/6.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--left">
						<img class="room__img" src="img/set3/3.jpg" alt="Some image"/>
						<img class="room__img" src="img/set3/4.jpg" alt="Some image"/>
						<img class="room__img" src="img/set3/5.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--right">
						<img class="room__img" src="img/set3/8.jpg" alt="Some image"/>
						<img class="room__img" src="img/set3/7.jpg" alt="Some image"/>
						<img class="room__img" src="img/set3/2.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
				<div class="room">
					<div class="room__side room__side--back">
						<img class="room__img" src="img/set1/3.jpg" alt="Some image"/>
						<img class="room__img" src="img/set1/6.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--left">
						<img class="room__img" src="img/set1/7.jpg" alt="Some image"/>
						<img class="room__img" src="img/set1/1.jpg" alt="Some image"/>
						<img class="room__img" src="img/set1/2.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--right">
						<img class="room__img" src="img/set1/4.jpg" alt="Some image"/>
						<img class="room__img" src="img/set1/5.jpg" alt="Some image"/>
						<img class="room__img" src="img/set1/8.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
				<div class="room">
					<div class="room__side room__side--back">
						<img class="room__img" src="img/set5/7.jpg" alt="Some image"/>
						<img class="room__img" src="img/set5/5.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--left">
						<img class="room__img" src="img/set5/6.jpg" alt="Some image"/>
						<img class="room__img" src="img/set5/4.jpg" alt="Some image"/>
						<img class="room__img" src="img/set5/3.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--right">
						<img class="room__img" src="img/set5/2.jpg" alt="Some image"/>
						<img class="room__img" src="img/set5/1.jpg" alt="Some image"/>
						<img class="room__img" src="img/set5/8.jpg" alt="Some image"/>
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
			</div>
		</div><!-- /container -->
		<div class="content">
			<header class="codrops-header">
				<div class="codrops-links">
					<a class="codrops-icon codrops-icon--prev" href="http://saenitd.com" title="LINK TO SAE"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
					<a class="codrops-icon codrops-icon--drop" href="https://avskr.in/" title="LINK TO AAVISHKAR 2.0"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
				</div>
				<h1 class="codrops-header__title">SOCIETY OF AUTOMOTIVE ENGINEERS</h1>
                                
				<div class="subject">AAVISHKAR 2.0 
				</div>
                                <button class="btn btn--info btn--toggle">
					<svg class="icon icon--info"><use xlink:href="#icon-info"></use></svg>
					<svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>	
				</button>
				<button class="btn btn--menu btn--toggle">
					<svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
					<svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>
				</button>
				<div class="overlay overlay--menu">
					<ul class="menu">
                                            <?php 
                                            if(isset($_SESSION['email'])) {?>
                                               
                                                 <?php $uid=$_SESSION['id'];
                                              $sel="Select submit1,submit2,submit3,submit4,score from users where id='$uid'";
                                              $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
                                              $arr=mysqli_fetch_array($selres);
                                              $s=$arr['score'];
                                              $i=($s/10)+1;
                                              if($arr[0]=='0') { ?>
                                              <li class="menu__item"><a class="menu__link" href="shop.php">PLAY ROUND 1</a></li>
                                              <?php }
                                               else if($arr[0]=='1' &&$arr[1]=='0') { ?>
                                              <li class="menu__item"><a class="menu__link" href="shop2.php">PLAY ROUND 2</a></li>
                                              
                                               <?php } 
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='0') { ?>
                                              <li class="menu__item"><a class="menu__link" href="shop3.php">PLAY ROUND 3</a></li>
                                              
                                              <?php }
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='0') { ?>
                                              <li class="menu__item"><a class="menu__link" href="shop4.php">PLAY ROUND 4</a></li>
                                            <?php } 
                                               
                                              else if($arr[0]=='1' && $arr[1]=='1' && $arr[2]=='1' && $arr[3]=='1') { ?>
                                              <li class="menu__item"><a class="menu__link" href="success4.php">PLAY ROUND 4</a></li>
                                            <?php } ?>
                                              <li class="menu__item"><a class="menu__link" href="autoquiz.php?id=<?php echo $i; ?> ">Autoquiz</a></li>
                                              <li class="menu__item"><a class="menu__link" href="autoquiz_leaderboard.php ">Autoquiz Leaderboard</a></li>
                                              <li class="menu__item"><a class="menu__link" href="leaderboard.php">Leaderboard</a></li>
                                              <li class="menu__item"><a class="menu__link" href="logout.php">Logout</a></li>
						
                                            <?php }
                                                else { ?>
                                              
                                              <li class="menu__item"><a class="menu__link" href="login.php">PLAY</a></li>
                                              <li class="menu__item"><a class="menu__link" href="signup.php">Signup</a></li>
						<li class="menu__item"><a class="menu__link" href="login.php">Login</a></li>
                                                    
                                              <?php  } ?>
						 
						</ul>
				</div>
				<div class="overlay overlay--info">
                                    <p class="info">&ldquo;Roadrangers&rdquo; an event in which one has to use his technical knowledge and also optimization skills to make the best possible car out of the given budget in a specified track. The event will be held in 4 rounds, each of which will be on a specific track. The participant will be dealt with a certain fixed budget at the beginning which may vary depending on their performance in the Autoquiz event. For the first round, the participant will have to buy one part from each type, each of which is associated with a specific rating. The rating will remain confidential throughout the event and will vary depending on the track. It should also be noted that higher price mig ht not guarantee a higher rating. After buying all the desired parts, participants need to confirm and submit. Once submitted, the rankings of the round will be shown after 1 hour. Rankings will be done on the basis of total ratings. There will also be a separate table which will be made on the basis of total ratings of all the rounds thus completed. <b>Once a part if bought in round 1 is sold in subsequent rounds(i.e, in 2,3,4), the amount that it would be sold for would be 50% of the price the participant bought it for.</b> Also the budget for rounds 2 and above will be the budget unused plus the money awarded on the basis of their rankings in the previous rounds.      </p>
				</div>
			</header>
			<h4 class="location">NIT DURGAPUR</h4>
			<div class="slides">
				<div class="slide">
					<h4 class="slide__name">Roadrangers <br/></h4>
					<h3 class="slide__title">
						<span>&ldquo;Make the best possible car with the given budget&rdquo;</span>
					<!--	<div class="slide__number">Room <strong>Tenjin</strong></div> -->
					</h3>
					<p class="slide__date">2nd November, 2018-9pm onwards</p>
				</div>
				
			</div>
			<nav class="nav">
				<button class="btn btn--nav btn--nav-left">
					<svg class="nav-icon nav-icon--left" width="42px" height="12px" viewBox="0 0 70 20">
						<path class="nav__triangle" d="M52.5,10L70,0v20L52.5,10z"/>
						<path class="nav__line" d="M55.1,11.4H0V8.6h55.1V11.4z"/>
					</svg>
				</button>
				<button class="btn btn--nav btn--nav-right">
					<svg class="nav-icon nav-icon--right" width="42px" height="12px" viewBox="0 0 70 20">
						<path class="nav__triangle" d="M52.5,10L70,0v20L52.5,10z"/>
						<path class="nav__line" d="M55.1,11.4H0V8.6h55.1V11.4z"/>
					</svg>
				</button>
			</nav>
		</div><!-- /content -->
		<div class="overlay overlay--loader overlay--active">
			<div class="loader">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<script src="js/anime.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>