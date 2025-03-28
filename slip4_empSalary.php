<?php
	session_start();					//session needs to start
	
	//read from $_POST server variable
	$no = $_POST['eno'];					
	$name = $_POST['enm'];
	$address = $_POST['eadd'];
	
	//set values in server variable
	$_SESSION['ENO'] = $no;
	$_SESSION['ENAME'] = $name;
	$_SESSION['EADDRESS'] = $address;	
?>
<!--Another Form To Receive Salary Details-->
<html>
	<body>
		<form method = 'post' action = 'slip4_empFinalShow.php'>
			<h2>Enter Employee Earning Details</h2>
			<br>

			<table border = 1>
				<tr>
					<td><b>EMPLOYEE BASIC : </b></td>
					<td><input type = 'text' name = 'ebs'></td>		
				</tr>
				<tr>
					<td><b>EMPLOYEE DAILY ALLOWANCE : </b></td>
					<td><input type = 'text' name = 'eda'></td>		
				</tr>
				<tr>
					<td><b>EMPLOYEE HOUSE RENT ALLOWANCE : </b></td>
					<td><input type = 'text' name = 'ehra'></td>		
				</tr>
				<tr>
					<td><b>RESPONSE :<b></td>
					<td><input type = 'submit' name = 'NEXT'><input type = 'reset' name = 'RESET'></td>		
				</tr>
			</table>
		</form>	
	</body>
</html>
