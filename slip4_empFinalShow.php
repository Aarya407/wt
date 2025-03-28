<?php
	session_start();
	
	$basic = $_POST['ebs'];					
	$da = $_POST['eda'];
	$hra = $_POST['ehra'];
	
	$eno = $_SESSION['ENO'];
	$ename = $_SESSION['ENAME'];
	$addre = $_SESSION['EADDRESS'];

	print("<center><h3>EMPLOYEE DETAILS</h3></center><br>");
	
	print("<center>EMPLOYEE NUMBER : $eno</center><br>");
	print("<center>EMPLOYEE NAME : $ename</center><br>");
	print("<center>EMPLOYEE ADDRESS : $addre</center><br>");
	
	print("<center>EMPLOYEE BASIC SALARY : $basic </center><br>");
	print("<center>EMPLOYEE DAILY ALLOWANCE : $da</center><br>");
	print("<center>EMPLOYEE HOUSE RENT ALLOWANCE : $hra</center><br>");
	
	$total = $basic + $da + $hra;
	print("<center><h2>TOTAL SALARY : $total</h2></center>");
?>
