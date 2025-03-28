<?php
	$dom = new DomDocument();
	
	$dom->load("slip7_movie.xml");
	
	$t = $dom->getElementsByTagName("MovieTitle");
	print("<center>");
	print("<b>Movie Title : </b>");
	foreach($t as $node)
	{
		print("\t$node->textContent, ");
	}
	print("</center>");
	
	$t = $dom->getElementsByTagName("ActorName");
	print("<center>");
	print("<br><b>Actor Name : </b>");
	foreach($t as $node)
	{
		print("\t$node->textContent, ");
	}
	print("</center>");
?>
