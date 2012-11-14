<?php
	require_once 'lib/php/Config.php';
	$settings = Config::getInstance();
	$settings->setPage("Portfolio");

?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<?php
	require_once 'lib/php/includes/html_header.php';
	?>	
</head>
<body class="portfolio">
	<div id="PageWrapper">
		
		<header>
			
			<h1 class="logo ir"><a href="#">[ SAMCREATE ]</a> </h1>
			
		</header>
		
		
		<div id="MainContent" role="main">
			<ul class="mainMenu" id="mainMenu">
				<li class="menu home ">
					<a href="/">Home</a>
					<p>My Blog</p>
				</li>
				<li class="menu portfolio selected">
					<a href="/portfolio.php">Portfolio</a>
					<p>My work</p>
				</li>
				<li class="menu portfolio ">
					<a href="https://github.com/samcreate/" target="_blank">Tinkering</a>
					<p>Experiments</p>
				</li>
				<li class="menu about">
					<a href="">Me</a>
					<p>My Resume</p>
				</li>
				<li class="menu contact">
					<a href="">Contact</a>
					<p>Get-in-touch</p>
				</li>
			
			</ul>
			<div id="mContainer">
				<ul class="thumbs">
					<li>
						<a href="/portfolio_item.php">
							<h3>Bleeping Clean</h3>
							<img src="/media/images/portfolio/thumb/hero/0003_BleepingClean.jpg" width="260" height="260" alt="0003 BleepingClean">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Nike Black Mamba</h3>
							<img src="/media/images/portfolio/thumb/hero/0010_BlackMamba.jpg" width="260" height="260" alt="0010 BlackMamba">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>GE - Airshow</h3>
							<img src="/media/images/portfolio/thumb/hero/0012_GE-Airshow.jpg" width="260" height="260" alt="0012 GE Airshow">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Facebook Studio</h3>
							<img src="/media/images/portfolio/thumb/hero/0019_FacebookStudioAwards.jpg" width="260" height="260" alt="0019 FacebookStudioAwards">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Jameson 1780</h3>
							<img src="/media/images/portfolio/thumb/hero/0024_jameson.jpg" width="260" height="260" alt="0024 Jameson">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Glad Trash Smart</h3>
							<img src="/media/images/portfolio/thumb/hero/0027_TrashSmart2.jpg" width="260" height="260" alt="0027 TrashSmart2">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Glad Black Bag</h3>
							<img src="/media/images/portfolio/thumb/hero/GladBlackBag2.jpg" width="260" height="260" alt="GladBlackBag2">
						</a>
					</li>
					<li>
						<a href="/portfolio_item.php">
							<h3>Juicy Fruit SU</h3>
							<img src="/media/images/portfolio/thumb/hero/thumb_SU11.jpg" width="260" height="260" alt="Thumb SU11">
						</a>
					</li>
				</ul>
			</div>
		</div>
		

		
		<canvas id="canvas_top" width="1024" height="768">Sorry, you don't have an awesome browser?</canvas>
		<canvas id="canvas_bottom" width="1024" height="768">Sorry, you don't have an awesome browser?</canvas>
		
		<footer>

		</footer>
	</div>
	<!--[if lt IE 7 ]>
	<script src="lib/js/plugins/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script type="text/javascript"> window._app_vars = <?php echo $settings->app_vars_JSON(); ?>; </script>
	
	<?

	if($settings->environment == PROD){

	?>
	<!-- BEGIN PROD: javascript -->
	<script type="text/javascript">
	(function() {
	    var s = document.createElement('script');
	    s.type = 'text/javascript';
	    s.async = true;
	    s.src = 'lib/js/evbmaster-min.js';
	    var x = document.getElementsByTagName('script')[0];
	    x.parentNode.insertBefore(s, x);
	})();
	
	</script>
	<!-- END: javascript -->
	<?	

	}else{

	?>
	<!-- BEGIN <?php echo $settings->environment ?>: javascript -->
	<script src="lib/js/jquery/jquery-1.8.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/jquery/jquery.superscrollorama.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/plugins/jquery.flexslider.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="lib/js/plugins/greensock/TweenMax.min.js"></script>
	<script src="lib/js/plugins/video.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/master.js" type="text/javascript" charset="utf-8"></script>	
	<script src="lib/js/main.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/sam.bgController.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/effects/sam.spirals.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/js/homePage.js" type="text/javascript" charset="utf-8"></script>
	<!-- END: javascript -->
	<?	
	} 
	?>
	
	<script type="text/javascript">

  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', '<?php echo $settings->analytics_id; ?>']);
  		_gaq.push(['_trackPageview']);
		
  		(function() {
  		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();

</script>
</body>
</html>