<?php
include ("classes/facebook.class.php");

$page_id = "162896513752848";

$facebook = new facebook();

$int = filter_var($page_id, FILTER_SANITIZE_NUMBER_INT);

$data = $facebook -> parse($int);

foreach ($data as $entry) {
	
	echo "<h2>{$entry->title}</h2>";
	$published = date("g:i A F j, Y", strtotime($entry -> published));
	echo "<small>{$published}</small>";
	echo "<p>{$entry->content}</p>";
	echo "<hr />";
}



?>
