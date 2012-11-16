<?php include DIR_TMPL.'/header.php'; ?>
	<div id="mContainer">
				<div class="holder">
					<img src="/media/images/portfolio/large/<?= $campaign->large ?>" width="975" height="370" alt="EVB Site Header OrbitBleepingClean">
					<h2 class="title"><span>{</span> <?= $campaign->title ?> <span>}</span></h2>
					<div class="description">
						<?= $campaign->description ?>
 					</div>
					<div class="flexslider">
			          <ul class="slides">

			          	<?php

				          	$html = "";
				          	foreach ($campaign->images as $imgs) {
				          		$html .= "<li><img src='/media/images/portfolio/carousel/$imgs->image' alt=''></li>";
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
						      poster='/media/images/portfolio/video/$vids->image_still'
						      data-setup='{}'>";
				          		$html .= "	<source type='video/webm' src='/media/video/$vids->webm'>";
								$html .= "	<source type='video/mp4' src='/media/video/$vids->mp4'>";
				          		$html .= "</video>";
				          		$html .= "</div>";
				          		echo $html;
				          	}
				         ?>

				</div>
			</div>
<?php include DIR_TMPL.'/footer.php'; ?>
