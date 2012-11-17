<?php


$settings->setPage("HomePage");

$class = "home blog";
$url = "http://samcreate.tumblr.com/";
if(defined('URI_PART_1')) $url = $url."page/".URI_PART_1;


$f = curl_get_file_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($f);
$data = $dom->getElementById("mContainer");
$html = $dom->saveHTML($data);

function curl_get_file_contents($URL){
	$c = curl_init();
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_URL, $URL);
	$contents = curl_exec($c);
	$contents = mb_convert_encoding($contents, 'HTML-ENTITIES', 'UTF-8');
	curl_close($c);

	if ($contents) return $contents;
	else return FALSE;
}

include DIR_VIEW.'/index.php';

?>
