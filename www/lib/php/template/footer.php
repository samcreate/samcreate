		</div>
		<canvas id="canvas_top" width="1024" height="768">Sorry, you don't have an awesome browser?</canvas>
		<canvas id="canvas_bottom" width="1024" height="768">Sorry, you don't have an awesome browser?</canvas>
		
		<footer>

		</footer>
	</div>
	<!--[if lt IE 7 ]>
	<script src="/lib/js/plugins/dd_belatedpng.js"></script>
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
	    s.src = '/lib/js/evbmaster-min.js';
	    var x = document.getElementsByTagName('script')[0];
	    x.parentNode.insertBefore(s, x);
	})();
	
	</script>
	<!-- END: javascript -->
	<?	

	}else{

	?>
	<!-- BEGIN <?php echo $settings->environment ?>: javascript -->
	<script src="/lib/js/jquery/jquery-1.8.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/jquery/jquery.superscrollorama.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/plugins/jquery.flexslider.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/plugins/greensock/TweenMax.min.js" type="text/javascript"></script>
	<script src="/lib/js/plugins/video.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/plugins/shCore.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/plugins/brushes/shBrushJScript.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/master.js" type="text/javascript" charset="utf-8"></script>	
	<script src="/lib/js/main.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/sam.bgController.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/effects/sam.spirals.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/homePage.js" type="text/javascript" charset="utf-8"></script>
	<script src="/lib/js/portfolio.js" type="text/javascript" charset="utf-8"></script>
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
	<script type="text/javascript">
	
	<?php 
		if( defined('URI_PART_0') && URI_PART_0 != "page"){
			echo "sam.main.queue(sam.".URI_PART_0.".init);";
		}else{
			echo "sam.main.queue(sam.homePage.init);";
		}
	 ?>
	</script>
</body>
</html>