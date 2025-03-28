<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	if(session_start())
	{
		print("Session Started<br/>");

		if(isset($_SESSION['VISIT']))
			$_SESSION['VISIT'] = $_SESSION['VISIT'] + 1;
		else
			$_SESSION['VISIT'] = 1;

		$count = $_SESSION['VISIT'];		
		
		print("PAGE VISITED : $count");
	}
	else
		print("Unable To Start Session<br/>");
		
?>
