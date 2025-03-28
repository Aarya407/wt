<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$doc = new DOMDocument();
	
	$root = $doc->createElement("CricketTeam");
	
	//australia
	$ele1 = $doc->createElement("Team");
	$ele1->setAttribute("country", "Australia");
	
	$player1 = $doc->createElement("player", "smith");
	$run1 = $doc->createElement("run", "7000");
	$wicket1 = $doc->createElement("wicket", "70");
	
	$ele1->appendChild($player1);
	$ele1->appendChild($run1);
	$ele1->appendChild($wicket1);

	//india
	$ele2 = $doc->createElement("Team");
	$ele2->setAttribute("country", "India");
	
	$player2 = $doc->createElement("player", "virat");
	$run2 = $doc->createElement("run", "17000");
	$wicket2 = $doc->createElement("wicket", "25");
	
	$ele2->appendChild($player2);
	$ele2->appendChild($run2);
	$ele2->appendChild($wicket2);
	
	//india
	$ele3 = $doc->createElement("Team");
	$ele3->setAttribute("country", "India");
	
	$player3 = $doc->createElement("player", "Dhoni");
	$run3 = $doc->createElement("run", "14000");
	$wicket3 = $doc->createElement("wicket", "20");
	
	$ele3->appendChild($player3);
	$ele3->appendChild($run3);
	$ele3->appendChild($wicket3);

	$root->appendChild($ele1);	
	$root->appendChild($ele2);	
	$root->appendChild($ele3);
	
	$doc->appendChild($root);
	
	$doc->save("slip25_Cricket.xml");
	print("Element Added Successfully.");
?>

