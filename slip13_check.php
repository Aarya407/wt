<?php
	$name = $_GET['name'];
	$specialNames = array("Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan");
	
	if(empty($name))
		echo "Stranger, please tell me your name!";
	else if(in_array($name, $specialNames))
		echo "Hello Master ".$name."!";
	else
		echo "$name I don't Know You";
?>
