<?php 

require_once('preheader.php');

	#the code for the class
include ('ajaxCRUD.class.php');

function slugit($obj) {

	$val = $obj[slug];
	$id = $obj[id];
	// everything to lower and no spaces begin or end
	$val = strtolower(trim($val));
 
	//replace accent characters, depends your language is needed
	//$val=replace_accents($val);
 
	// decode html maybe needed if there's html I normally don't use this
	//$val = html_entity_decode($val,ENT_QUOTES,'UTF8');
 	$val = preg_replace('/\s+/', '-', $val);

	// adding - for spaces and union characters
	$find = array(' ', '&', '\r\n', '\n', '+',',');
	$val = str_replace ($find, '-', $val);
 
	//delete and replace rest of special chars
	$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	$repl = array('', '-', '');
	$val = preg_replace ($find, $repl, $val);
 


	$test = qr("UPDATE campaigns SET slug = \"$val\" WHERE id = $id");

	error_log("####### ".$test);
}

$tblCampaigns = new ajaxCRUD("Campaigns", "campaigns", "id");

$tblCampaigns->omitPrimaryKey();

$tblCampaigns->setFileUpload('thumb','../media/images/portfolio/thumb/hero/','/media/images/portfolio/thumb/hero/');

$tblCampaigns->setFileUpload('large','../media/images/portfolio/large/','/media/images/portfolio/large/');

$tblCampaigns->setTextareaHeight('description', 200);

$tblCampaigns->setLimit(10);

$tblCampaigns->onAddExecuteCallBackFunction('slugit');

$tblCampaigns->addAjaxFilterBox('title', 20);

include ('templates/header.php');

$tblCampaigns->showTable();

include ('templates/footer.php');



 ?>