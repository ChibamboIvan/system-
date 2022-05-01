<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocation.io/ipgeo?apiKey=2fcc278be91a45bda4199ded63e7fc15&ip=".$ip);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
print_r($output);
curl_close($ch);

?>    