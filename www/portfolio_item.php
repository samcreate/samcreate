<?php
	require_once 'lib/php/Config.php';
	$settings = Config::getInstance();
	$settings->setPage("HomePage");

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
<body class="portfolio item">
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
					<a href="">Tinkering</a>
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
				<div class="holder">
					<img src="media/images/portfolio/large/evb_site_header_0002_altoids.jpg" width="975" height="370" alt="Evb Site Header 0002 Altoids">
					<h2 class="title"><span>{</span> Altoids - Curiously Strong Awards <span>}</span></h2>
					<div class="description">
						<p>The music video, “The Stars on Facebook,” was the anthem for the Curiously Strong Awards. It introduced all the Curiously Strong characters and gave the campaign a viral kick-start. There were twelve different awards, each based on an archetypal Facebook character. The characters were people we all know from our Facebook feeds, from the girl who “likes” everything to the guy who posts every detail of his life.</p>
						<p>Altoids was known for smart, irreverent campaigns that were supported by their famous tagline, "Curiously Strong." In 2011, they needed to prove that they could be as witty and relevant in the digital world as they had once been in traditional media. The Altoids Curiously Strong Awards gave people a way to celebrate the Curiously Strong characters of Facebook, and integrated Altoids into all of our social networks.</p>

					</div>
					<div class="videoHolder">
						<video id="example_video_1" class="video-js vjs-tech" controls preload="none" width="975" height="548"
						      poster="/media/images/portfolio/video/OrbitBleepingClean_videostills_hottub.jpg"
						      data-setup="{}">
						    <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
						    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
						    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
						 </video>
					</div>
				</div>
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