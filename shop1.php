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
                                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/ExpandingBarMenus/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
					<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=30534" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
				</div>
				<h1 class="codrops-header__title">SOCIETY OF AUTOMOTIVE ENGINEERS</h1>
				<div class="subject">SAE ONLINE EVENT</div>
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
                                                <li class="menu__item menu__item--current"><a class="menu__link" href="rules.php">RULES</a></li>
                                              <li class="menu__item"><a class="menu__link" href="shop.php">Shop</a></li>
                                              <li class="menu__item"><a class="menu__link" href="logout.php">Logout</a></li>
						
                                            <?php }
                                                else { ?>
                                              <li class="menu__item menu__item--current"><a class="menu__link" href="login.php">RULES</a></li>
                                              <li class="menu__item"><a class="menu__link" href="login.php">Shop</a></li>
                                              <li class="menu__item"><a class="menu__link" href="signup.php">Signup</a></li>
						<li class="menu__item"><a class="menu__link" href="login.php">Login</a></li>
                                                    
                                              <?php  } ?>
						 
						</ul>
				</div>
				<div class="overlay overlay--info">
					<p class="info">&ldquo;Life in Pieces&rdquo; is the subject of all exhibitions taking place in the Mirai Art Gallery in 2017. Fragments of lost memories, fleeting moments and the breaking apart of human nature are this year's highlighted topics. We welcome you to a exploration space of a unique kind&mdash;the one that will stay with you and impact you on many levels. Come visit us.</p>
				</div>
			</header>
			<h4 class="location">Mirai Art Gallery &amp; Exhibition Center, Sapporo, Japan</h4>
			<div class="slides">
				<div class="slide">
					<h4 class="slide__name"</h4>
					<h3 class="slide__title">
						
					</h3>
                                        
					
                                            <?php
                                        include 'ifadded.php';
                                        include 'number_type.php';
        
        
        ?>
            <br />
       <div class="button">
        <input type="button" class="btn btn-danger" onclick="location.href='fantasy.php'" value="FIND PLAYERS"/>
       <input type="button" class="btn btn-warning" onclick="location.href='totalpoints.php'" value="POINTS"/>
       <input type="button" class="btn btn-primary" onclick="location.href='leaderboard.php'" value="LEADERBOARD"/>
       <input type="button"  float="right" class="btn btn-success" onclick="location.href='addedlist.php'" value="CHECK ADDED PLAYERS"/>
       </div>
        <?php
        $userid=$_SESSION['id'];
        $sel_query="Select balance from users where id='$userid'";
        $sel_query_res=mysqli_query($con,$sel_query);
        $row=mysqli_fetch_array($sel_query_res);
        ?>
       
            <h2 class="text-danger">Balance:<?php echo $row[0];?></h2>
        
        <h4 >
            1. GOALKEEPERS
        </h4>
        <table class="table table-hover">
            <tr>
            <th >Name</th>
            <th >Type</th>
            
            <th >COST</th>
            <th></th>
            </tr>
            <?php
            //$userid=$_SESSION['id'];
            $bal=$row[0];
            $sel_query1="Select * from items where type=1";
            $sel_query_res1=mysqli_query($con,$sel_query1);
           
            while($row1=mysqli_fetch_array($sel_query_res1))
            {
                ?>
            <tr>
            <td ><?php echo $row1['name']; ?></td>
            <td ><?php echo $row1['type']; ?></td>
            <td ><?php echo $row1['cost']; ?></td>
            
            <?php if(if_added($row1['id'])==0 && $row1['cost']<=$bal)
            { ?>
            <?php if( count_type($row1['type'])<1){ ?>
            <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary "  value="ADD PLAYER" >ADD PLAYER</a></td>
            <?php } else { ?>
                <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD PLAYER" >ADD PLAYER</a></td>
          <?php  }
             }
            else
            {
             ?> <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD PLAYER" >ADD PLAYER</a></td>
          <?php  } ?>
            </tr>
            <?php } ?>
        </table>
             <h4 class="text-danger">
            2. jgifrjig
        </h4>
        <table class="table table-hover">
            <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Type</th>
            
            <th class="text-center">COST</th>
            <th></th>
            </tr>
            <?php
            //$userid=$_SESSION['id'];
            $bal=$row[0];
            $sel_query1="Select * from items where type=2";
            $sel_query_res1=mysqli_query($con,$sel_query1);
           
            while($row1=mysqli_fetch_array($sel_query_res1))
            {
                ?>
            <tr>
            <td class="text-danger"><?php echo $row1['name']; ?></td>
            <td class="text-danger"><?php echo $row1['type']; ?></td>
            <td class="text-danger"><?php echo $row1['cost']; ?></td>
            
            <?php if(if_added($row1['id'])==0 && $row1['cost']<=$bal)
            { ?>
            <?php if( count_type($row1['type'])<1){ ?>
            <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary "  value="ADD PLAYER" >ADD PLAYER</a></td>
            <?php } else { ?>
                <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD PLAYER" >ADD PLAYER</a></td>
          <?php  }
             }
            else
            {
             ?> <td> <a href="additem.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD PLAYER" >ADD PLAYER</a></td>
          <?php  } ?>
            </tr>
            <?php } ?>
        </table>
                                 <p class="slide__date"></p>       
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