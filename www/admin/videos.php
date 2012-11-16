<?php 

require_once('preheader.php');

	#the code for the class
include ('ajaxCRUD.class.php');

$tblvideos = new ajaxCRUD("Campaign Videos", "videos", "id");

$tblvideos->omitPrimaryKey();

$tblvideos->defineRelationship("campaign_id", "campaigns", "id","title");

$tblvideos->setFileUpload('mp4','../media/video/','/media/video/');

$tblvideos->setFileUpload('webm','../media/video/','/media/video/');

$tblvideos->setFileUpload('image_still','../media/images/portfolio/video/','/media/images/portfolio/video/');

include ('templates/header.php');

$tblvideos->showTable();

include ('templates/footer.php');

 ?>