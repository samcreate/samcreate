<?php 

require_once('preheader.php');

	#the code for the class
include ('ajaxCRUD.class.php');

$tblimages = new ajaxCRUD("Campaign Images", "images", "id");

$tblimages->omitPrimaryKey();

$tblimages->defineRelationship("campaign_id", "campaigns", "id","title");

$tblimages->setFileUpload('image','../media/images/portfolio/carousel/','/media/images/portfolio/carousel/');

include ('templates/header.php');

$tblimages->showTable();

include ('templates/footer.php');

 ?>