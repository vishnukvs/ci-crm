<?php

	$year = date('Y');
	$month = date('m');

	echo json_encode(array(
	
		array(
			'id' => 111,
			'title' => "DJ Expo in Melbourne",
			'start' => "$year-$month-25",
			'end' =>  "$year-$month-27",
			'url' => "view_event.html"
		),
		array(
			'id' => 234,
			'title' => "Weddinng",
			'start' => "$year-$month-10",
			'url' => "view_event.html"
		),
		array(
			'id' => 235,
			'title' => "Corporate",
			'start' => "$year-$month-19",
			'url' => "view_event.html"
		),
		array(
			'id' => 222,
			'title' => "School Party",
			'start' => "$year-$month-20",
			'url' => "view_event.html"
		)
	
	));

?>
