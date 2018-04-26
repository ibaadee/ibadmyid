<?php
	$maps_url = 'http://blog.ibad.my.id/wp-json/wp/v2/posts?per_page=5';
	$maps_json = file_get_contents($maps_url);
	$maps_array = json_decode($maps_json, true);
	$temp = $maps_array; 
	
	//print_r($maps_array['weather']);
	
	echo "<br />";
	echo date("F j, Y", strtotime($maps_array[0]['date']));
	
	foreach($maps_array as $maps)
	{
			print_r($maps['title']['rendered']);
	}
	
	//echo "<br>";
	//$temp = $temp[0];
	//print_r($temp);
	
?>