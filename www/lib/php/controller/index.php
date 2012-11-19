<?php

// variables setup
$settings->setPage("HomePage");
$class = "home blog";
$url = "http://samcreate.tumblr.com/";
$html = init($url);



function init($url){
	if(defined('URI_PART_1') && URI_PART_1 != "1"){
		$url = $url.URI_PART_0."/".URI_PART_1;
		if(URI_PART_0 ==="post"){
			$url = get_redirect($url);
		}	
	} 


	$f = curl_get_file_contents($url);
	$dom = new DOMDocument();
	@$dom->loadHTML($f);
	$data = $dom->getElementById("mContainer");
	return $dom->saveHTML($data);
}

function curl_get_file_contents($URL){
	$c = curl_init();
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, false);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_URL, $URL);
	$contents = curl_exec($c);
	$contents = mb_convert_encoding($contents, 'HTML-ENTITIES', 'UTF-8');
	curl_close($c);

	if ($contents) return $contents;
	else return FALSE;
}

function get_redirect($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$a = curl_exec($ch);
	curl_close( $ch ); 
	// the returned headers
	$headers = explode("\n",$a);
	// if there is no redirection this will be the final url
	$redir = $url;
	// loop through the headers and check for a Location: str
	$j = count($headers);
	for($i = 0; $i < $j; $i++){
	// if we find the Location header strip it and fill the redir var       
	if(strpos($headers[$i],"Location:") !== false){
	        $redir = trim(str_replace("Location:","",$headers[$i]));
	        break;
	    }
	}
	// do whatever you want with the result
	return $redir;
}


include DIR_VIEW.'/index.php';

?>
