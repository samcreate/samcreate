<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title><?php $settings->getPageTitle(); ?></title>

	<!-- BEGIN: meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="tC0GYk21ovT1pQyFGJ7UbiXV-XC84u_PBzqETGvt7XI" />
    <meta name="description" content="Most great digital ninjas are always on the pendulum of being completely introvert or too extroverted, but always consistently lactose intolerant. True digital ninjas are always trying to get the humbling feeling of when trying to learn something new." />
	<meta name="keywords" content="samuel, aaron, mcguire, ad, advertising, interactive, shoot the banker, vestal watch, vw, digital, mobile, social media, fms, arduino" />
	<meta name="author" content="Aaron McGuire" />
	<link rel="shortcut icon" href="favicon.ico"/> 
	<meta name="description" content="">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- END: meta tags -->
	<!-- BEGIN: OG FBook meta tags -->
	<meta property="fb:admins" content=""/> 
	<meta property="og:type" content="website"/> 
	<meta property="og:url" content=""/> 
	<meta property="og:title" content="" /> 
	<meta property="og:site_name" content=""/> 
	<meta property="og:description" content=""/> 
	<meta name='text:Disqus samcreate' content='' />
	<!-- <meta property="og:::::::imagez" content="<?php echo $settings->protocol ?>://<?php echo $settings->server_name ?>/media/images/facebook_share.jpg" /> -->
	<!-- END: OG FBook meta tags -->
	<?

	if($settings->environment == PROD){

	?>
	<!-- BEGIN PROD: styles -->
	<link rel="stylesheet" href="/styles/evbmaster-min.css" type="text/css" />
	<script type="text/javascript">
		document.write('<link rel="stylesheet" href="/styles/javascript.css" />'); 
	</script>
	<!-- END: styles -->
	<?	
		
	}else{

	?>
	<!-- BEGIN <?php echo $settings->environment ?>: styles -->
	<link rel="stylesheet" type="text/css" href="/styles/master.css" />
	<script type="text/javascript">
		document.write('<link rel="stylesheet" href="/styles/javascript.css" />'); 
	</script>
	<!-- END: styles -->
	<?	
	} 
	?>
</head>
<body class="<?= $class ?>">
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
				<li class="menu portfolio">
					<a href="/portfolio/index">Portfolio</a>
					<p>My work</p>
				</li>
				<li class="menu  tink">
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