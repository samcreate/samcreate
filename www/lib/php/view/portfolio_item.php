<?php include DIR_TMPL.'/header.php'; ?>
	<div id="mContainer">
				<div class="holder">
					<img src="<?= $campaign->large ?>" width="975" height="370" alt="EVB Site Header OrbitBleepingClean">
					<h2 class="title"><span>{</span> <?= $campaign->title ?> <span>}</span></h2>
					<div class="description">
						<?= $campaign->description ?>
 					</div>
					<div class="flexslider">
			          <ul class="slides">

			          	<?php

				          	$html = "";
				          	foreach ($campaign->images as $imgs) {
				          		$html .= "<li><img src='$imgs->image' alt=''></li>";
				          	}

			          		echo $html;
				         ?>
			          </ul>
			        </div> <!-- eof flex slider -->
					
						<?php

				          	foreach ($campaign->videos as $vids) {
				          		$html = "";
				          		$html .= "<div class='videoHolder'>";
				          		$html .= "<video id='example_video_$vids->id' class='video-js vjs-tech ' controls preload='none' width='975' height='548'
						      poster='$vids->image_still'
						      data-setup='{}'>";
				          		$html .= "	<source type='video/webm' src='$vids->webm'>";
								$html .= "	<source type='video/mp4' src='$vids->mp4'>";
				          		$html .= "</video>";
				          		$html .= "</div>";
				          		echo $html;
				          	}
				         ?>

				</div>
			</div>
<?php include DIR_TMPL.'/footer.php'; ?>
