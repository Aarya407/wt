<?php
session_start();
	if(isset($_SESSION['count']))
		$_SESSION['count']++;
	else
		$_SESSION['count']=1;
	echo"<h4> This page is accessed ".$_SESSION['count']." times.<h4>";
?>
