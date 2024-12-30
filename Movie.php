<?php
	$dom=new DomDocument();
	$dom->load("Movie.xml");
	$t=$dom->getElementsByTagName("MovieTitle");
	echo"<b>Movie Title<b></br>";
	foreach($t as $node)  
	{
		echo $node->textContent."<br>";
	}
	$t=$dom->getElementsByTagName("Actorname");
	echo"<b>Actor Name<b></br>";
	foreach($t as $node)
	{
		echo $node->textContent."<br>";
	}
?>
