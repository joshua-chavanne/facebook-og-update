<?php
function updateFacebook($urlsAr){
	foreach($urlsAr as $url){
		$curl = curl_init();
		echo 'Updating '.$url.'<br />';
		curl_setopt($curl, CURLOPT_URL,'https://graph.facebook.com/?id='.$url.'&scrape=true');
		$result = curl_exec($curl);
		echo 'Response is: '.$result.'<br /><hr />';
		curl_close($curl);
	}
}

$file = file_get_contents('urls.txt');

$urlsAr = explode(PHP_EOL, $file);


updateFacebook($urlsAr);
