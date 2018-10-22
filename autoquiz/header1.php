
<html>
    <head>

<style>
    a{
        text-decoration: none;
    }
html {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  height: 100%;
  background: #F3F4F8;
}

ul.nav {
  display: flex;
  position: relative;
  flex-direction: row;
  align-items: center;
  max-width: 100%;
  margin: 0 auto;
  padding: 0;
  list-style: none;
  background: #F4F6F7  ;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}
ul.nav > li {
  position: relative;
  flex-grow: 1;
  flex-shrink: 0;
  height: 60px;
  font-size: 20px;
  text-align: center;
  text-transform: uppercase;
  line-height: 60px;
  letter-spacing: 1px;
  color: #17202A  ;
  cursor: pointer;
}
ul.nav > li:hover {
  background: rgba(0, 0, 0, 0.1);
}
ul.nav > li:hover ul.dropdown {
  visibility: visible;
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
  opacity: 1;
  z-index: 0;
}
ul.nav > li:hover ul.dropdown > li {
  -webkit-animation-name: slideInLeft;
          animation-name: slideInLeft;
  -webkit-animation-duration: 0.3s;
          animation-duration: 0.3s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-fill-mode: backwards;
          animation-fill-mode: backwards;
}
ul.nav > li:first-child {
  border-top-left-radius: 6px;
}
ul.nav > li:last-child {
  border-top-right-radius: 6px;
}

ul.dropdown {
  visibility: hidden;
  display: flex;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  flex-direction: column;
  margin: 0;
  padding: 5px 0 30px;
  list-style: none;
  color: #333;
  background: #e5e4ea;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
  box-shadow: 1px 2px 5px -1px rgba(0, 0, 0, 0.15), 0px 4px 14px -1px rgba(0, 0, 0, 0.1);
  -webkit-transform: translate(0, -60px);
          transform: translate(0, -60px);
  transition: opacity 0.2s, z-index 0s 0.2s, -webkit-transform 0.2s ease-out;
  transition: transform 0.2s ease-out, opacity 0.2s, z-index 0s 0.2s;
  transition: transform 0.2s ease-out, opacity 0.2s, z-index 0s 0.2s, -webkit-transform 0.2s ease-out;
  opacity: 0;
  z-index: -1;
}
ul.dropdown > li {
  font-size: 14px;
  cursor: pointer;
}
ul.dropdown > li:hover {
  background: rgba(0, 0, 0, 0.06);
}

@-webkit-keyframes slideInLeft {
  from {
    -webkit-transform: translate(-25%, 0);
            transform: translate(-25%, 0);
    opacity: 0;
  }
  to {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
    opacity: 1;
  }
}

@keyframes slideInLeft {
  from {
    -webkit-transform: translate(-25%, 0);
            transform: translate(-25%, 0);
    opacity: 0;
  }
  to {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
    opacity: 1;
  }
}

	

</style>

<script>
$( document ).ready(function() {
	
	// Loop through each nav item
	$('nav.navbar').children('ul.nav').children('li').each(function(indexCount){
		
		// loop through each dropdown, count children and apply a animation delay based on their index value
		$(this).children('ul.dropdown').children('li').each(function(index){
			
			// Turn the index value into a reasonable animation delay
			var delay = 0.1 + index*0.03;
			
			// Apply the animation delay
			$(this).css("animation-delay", delay + "s")			
		});
	});
});
</script>
</head>
<body>
    <?php
        $uid=$_SESSION['id'];
        $sel="Select submit1,submit2,submit3,submit4 from users where id='$uid' ";
        $selres=mysqli_query($con,$sel) or die(mysqli_error($con));
        $arr=mysqli_fetch_array($selres);
        ?>
<nav class="navbar">
	<ul class="nav">
		<li>
			
                        <a href='../index.php'>HOME</a>
		</li>
		<li>
                    <a href='autoquiz_leaderboard.php'>	Autoquiz Leaderboard</a>
					
		</li>
		<li>
                        TABLES
			<ul class="dropdown">
                             <?php if($arr[0]=='1'){ ?>
                            <a href='../tables/r1table.php'><li>ROUND 1 TABLE</li>
                                 <?php } if($arr[1]=='1'){ ?></a>
                        <a href='../tables/r2table.php'>	<li>ROUND 2 TABLE</li></a>
                                <?php } if($arr[2]=='1'){ ?>
                        <a href='../tables/r3table.php'>	<li>ROUND 3 TABLE</li></a>
                                  <?php } if($arr[3]=='1'){ ?>
                        <a href='../tables/r4table.php'> <li>ROUND 4 TABLE</li></a>
                                 <?php } ?>
                        <a href='../tables/leaderboard.php'> <li>LEADERBOARD</li></a>
                                 
			</ul>			
		</li>
		<li>
                    <a href='settings.php'>SETTINGS</a>
						
		</li>
		<li>
                    <a href='logout.php'>LOGOUT</a>
							
		</li>
	</ul>
</nav>	
</body>
</html>