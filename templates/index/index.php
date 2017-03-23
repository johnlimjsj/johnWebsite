<?php
	include "../php/changeSettings.php";
	include "../php/base.php";
?>
<html>
<head>
	<title> Home Page </title>
	<link rel = "stylesheet" href = "<?php echo $base_static?>css/bootstrap.min.css" type="text/css" />
	<link rel = "stylesheet" href = "<?php echo $base_static?>css/theme.css" type="text/css" />
	<link rel="icon" href="<?php echo $base_static?>img/webIcon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class ="topHeader">
		<img id="logo" src="<?php echo $base_static?>img/johnLogo.png">
		<img id = "menu" src ="<?php echo $base_static?>img/menu2.png">

	</div>
	<div class="bodyHead"> <!--this is the big orange expanse at the top half-->
		<div class="bodyHeadWrap"> <!-- this is the invisible div that keeps everything in the middle of the page -->
			<header class="mainHeader"> 
				<!-- Menu -->
				<nav class="nav-main clearfix"> <!-- refers to the dark grey nav menu bar -->
					<ul>
						<li>
						<a href="index.php">Home</a></li><li>
						<a href="#">My Portfolio</a></li><li>
						<a href="#"><span>My Travels</span></a>
							<ul>
								<li><a href="#">USA</a></li>
								<li><a href="#">South East Asia</a></li>
								<li><a href="#">South East Asia</a></li>
								<li><a href="#">South East Asia</a></li>
							</ul>
						</li><li>
						<a href="#">About Me</a></li><li>
						<a href="#">Contact</a></li>
					</ul>	
				</nav>

				<div class ="cycle-slideshow" data-cycle-pager-template="<a class = 'thumb' href='#'><img src='{{src}}'></a>">
					<div class = "cycle-pager"></div>
					<div class = "cycle-prev">&#9001;</div>
					<div class = "cycle-next">&#9002;</div>

					<img src="<?php echo $base_static?>/img/sliderIMG/johnBanner.jpg">
					<img src="<?php echo $base_static?>/img/sliderIMG/monkey_logo.jpg">
					<img src="<?php echo $base_static?>/img/sliderIMG/painting.jpg">
					<img src="<?php echo $base_static?>/img/sliderIMG/wedding.jpg">
				</div>

			</header>
		</div> <!-- class=bodyHeadWrap-->
	</div> <!-- class=bodyHead-->

<!-- Divisions for main content -->
	</body>
	<div class="bodyWrap">
		<div class = "mainContent">
			<div class="content">
				<article class="topContent">
					<content>

						<?php 
							foreach($settingButtons as $key => $val){
								echo "<a href='?$key=on' class='btn btn-primary turnon' id='$key'> Turn On $key </a>";
								echo "<a href='?$key=off' class='btn btn-primary turnoff' id='$key'> Turn Off $key </a>";
								echo "</br></br>";
							}
						?>
					</content>
				</article> <!-- class = "topcontent"-->
			</div> <!-- class="content" -->
		</div> <!-- class="mainContent" -->

		
	</div> <!-- class="bodyWrap"-->
	</body>
	<div class="bodyFooter">		
			<p> copy right by John </p>
	</div><!-- class="bodyFooter"-->
	
	<script type="text/javascript" src = "<?php echo $base_static?>/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src = "<?php echo $base_static?>/js/navMenuV4.js"></script>
	<script type="text/javascript" src = "<?php echo $base_static?>/js/modernizr.custom.20382.js"></script>
	<script type="text/javascript" src = "<?php echo $base_static?>/js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src = "<?php echo $base_static?>/js/doubletaptogo.js"></script>
	<script>
		var url = window.location.href;
		// alert(url);
		$( function()
		{
			$( '.nav-main li:has(ul)' ).doubleTapToGo(); 
		});
	</script>
</html>



