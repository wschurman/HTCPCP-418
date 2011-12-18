<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'BREW') {
	$data = "milk-type=".$_POST['milk-type']."&syrup-type=".$_POST['syrup-type']."&alcohol-type=".$_POST['alcohol-type']; 
	$tuCurl = curl_init(); 
	curl_setopt($tuCurl, CURLOPT_URL, "send.php"); 
	curl_setopt($tuCurl, CURLOPT_POST, 1);
	curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data); 
	curl_setopt($tuCurl, CURLOPT_HTTPHEADER, array("Content-Type: application/coffee-pot-command", "Content-length: ".strlen($data)));
	echo "Brewing...<br>$data";
}

?>