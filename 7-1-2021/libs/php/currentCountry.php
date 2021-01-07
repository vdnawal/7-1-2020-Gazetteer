<?php
	//print_r($_POST);
	include('openCage/AbstractGeocoder.php');
	include('openCage/Geocoder.php');

	$geocoder = new \OpenCage\Geocoder\Geocoder('c3792cfb907b49798fa63cc7128212d3');
	
	$string = (isset($_POST['countryName'])) ? $_POST['countryName'] : $_POST['latitude'].',' .$_POST['longitude'] ;
	
	$result = $geocoder->geocode($string); 

	
	header('Content-Type: application/json; charset=UTF-8');
	echo json_encode($result, JSON_UNESCAPED_UNICODE);
	
?>