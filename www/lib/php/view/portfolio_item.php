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
			        </div> <!-- eof flex slider vjs-tech-->

						<?php

				          	foreach ($campaign->videos as $vids) {
				          		
				        ?>
				        		<div class="videoHolder video" data-video-id="sam_video_<?=$vids->id;?>" data-poster="/media/images/portfolio/video/<?=$vids->image_still;?>" data-video-urls='{"mp4": "/media/video/<?=$vids->mp4;?>", "webm": "/media/video/<?=$vids->webm;?>", "ogg": "" }'>
				       				<video id='sam_video_<?=$vids->id;?>' controls="" class='video-js'preload='metadata' poster='/media/images/portfolio/video/<?=$vids->image_still;?>'>
						      			<source type='video/webm' src='/media/video/<?=$vids->webm;?>'><source type='video/mp4' src='/media/video/<?=$vids->mp4;?>'>
						      		</video>
						      	</div>
				        <?php
				          
				          	}
				         ?>

				</div>
			</div>
<?php include DIR_TMPL.'/footer.php'; ?>
