
<html>

<head>
	<title> Home Page </title>
	<link rel = "stylesheet" href = "styleV4.css" type="text/css" />
	<link rel="icon" href="webIcon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="jquery.blueberry.js"></script>
-->

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
				<!--jQuuery for te nav menu -->
	<!-- jquery library -->
		<script type="text/javascript" src = "jquery-1.11.3.min.js"></script>
	<!-- my own jquery -->
		<script type="text/javascript" src = "navMenuV4.js"></script>
	<!-- modernizr library -->
		<script type="text/javascript" src = "modernizr.custom.20382.js"></script>		

	<!--image slider -->
				<div class ="cycle-slideshow" data-cycle-pager-template="<a class = 'thumb' href='#'><img src='{{src}}'></a>">
					<div class = "cycle-pager"></div>
					<div class = "cycle-prev">&#9001;</div>
					<div class = "cycle-next">&#9002;</div>

					<img src="sliderIMG/johnBanner.jpg">
					<img src="sliderIMG/monkey_logo.jpg">
					<img src="sliderIMG/painting.jpg">
					<img src="sliderIMG/wedding.jpg">
				</div>
		<script type="text/javascript" src = "jquery.cycle2.min.js"></script>
		<script type="text/javascript" src = "doubletaptogo.js"></script>
		<script>
			$( function()
			{
				$( '.nav-main li:has(ul)' ).doubleTapToGo(); 
			});
		</script>

			</header>
		</div> <!-- class=bodyHeadWrap-->
	</div> <!-- class=bodyHead-->
		



<!-- Divisions for main content -->
	</body>
	<div class="bodyWrap">
		<div class = "mainContent">
			<div class="content">
				<article class="topContent">
					<header>
						<h2><a href="#"> Link </a></h2>
					</header>

					<table class="details" border="0" cellpadding="5" cellspacing="2" width="95%">
					    <tr valign="top">
					      <th>Tests</th> <td> test1 </td> <td> test2 </td>
					   </tr>
					   <tr valign="top" class="Failure">
					     <th>Hi</th> <td> hi1 </td> <td> hi2 </td>
					  </tr>
					</table>

					<footer>
						<p class="postInfo">Some description about the main title</p>
					</footer>
						<content>
							<?php 
								// foreach($_REQUEST as $key => $value){
								// 	if($key=="sensor"){
								// 		$sensor = $value;
								// 		echo "got sensor";
								// 	}
								// }
								$val = $_GET['sensor'];
								if($val == 'water')
									echo "got water val";
							?>
							<p>Portfolio page</p>
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


</html>