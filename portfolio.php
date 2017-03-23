<?php
$settingButtons = array
(
	"light"=>"on",
	"pump"=>"on",
	"fan"=>"on"
);

foreach($settingButtons as $key => $val){
	$val = $_GET[$key];
	if($val!="")
		$settingButtons[$key]=$val;
}
$file = fopen("light.json", "w") or die("can't open file");

$jsonSettings = json_encode($settingButtons);
echo $jsonFormat;
fwrite($file, $jsonSettings);
fclose($file);

?>
<html>

<head>
	<title> Home Page </title>
	<link rel = "stylesheet" href = "css/bootstrap.min.css" type="text/css" />
	<link rel = "stylesheet" href = "css/theme.css" type="text/css" />
	<link rel="icon" href="webIcon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class ="topHeader">
		<img id="logo" src="johnLogo.png">
		<img id = "menu" src ="menu2.png">

	</div>
	<div class="bodyHead"> <!--this is the big orange expanse at the top half-->
		<div class="bodyHeadWrap"> <!-- this is the invisible div that keeps everything in the middle of the page -->
			<header class="mainHeader"> 
				<!-- Menu -->
				<nav class="nav-main clearfix"> <!-- refers to the dark grey nav menu bar -->
					<ul>
						<li>
						<a href="index.html">Home h1</a></li><li>
						<a href="portfolio.php">My Portfolio</a></li><li>
						<a href="travelsV4.html"><span>My Travels</span></a>
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

		<aside class="SideBar">
			<article>
				<content>
					<h2>Top Side Bar</h2>
					<p> some paragraph information. Type some random text 
						over here to fill up the space haha.

					</p>
				</content>
			</article>
		</aside> <!--class="topSideBar"-->
	</div> <!-- class="bodyWrap"-->
	</body>
	<div class="bodyFooter">		
			<p> copy right by John </p>
	</div><!-- class="bodyFooter"-->
	
	<script type="text/javascript" src = "js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src = "js/navMenuV4.js"></script>
	<script type="text/javascript" src = "js/modernizr.custom.20382.js"></script>					
	<script type="text/javascript" src = "js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src = "js/doubletaptogo.js"></script>
	<script>
		$( function()
		{
			$( '.nav-main li:has(ul)' ).doubleTapToGo(); 
		});
	</script>
</html>



