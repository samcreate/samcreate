<?php include DIR_TMPL.'/header.php'; ?>
	<div id="mContainer">
		<ul class="thumbs">
			<?php 
				foreach($campaigns as $campaign){
					echo "<li>";
					echo "	<a href='/work/$campaign->slug'>";
					echo "		<h3>$campaign->title</h3>";
					echo "		<img src='/media/images/portfolio/thumb/hero/$campaign->thumb' width='260' height='260' alt='0003 BleepingClean'>";
					echo "	</a>";
					echo "</li>";
					
				}
			 ?>

		</ul>
	</div>
<?php include DIR_TMPL.'/footer.php'; ?>
