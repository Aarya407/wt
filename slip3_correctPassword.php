<?php
session_start();
	
if(isset($_POST['submit']))
{
	$name = $_POST['username'];
	$password = $_POST['password'];
	
	$correctName = 'myusername';
	$correctPassword = 'mypassword';
	
	if($name == $correctName && $password == $correctPassword)
	{
		$_SESSION['loggedin'] = true;
		//echo "login ";
		Header('Location : slip3_welcome.php');
		Exit;
	}
	else
	{
		if(isset($_SESSION['attempts']))
			$_SESSION['attempts']--;
		else
			$_SESSION['attempts'] = 3;
			
		if($_SESSION['attempts'] <= 0)
			print("Maximum Login Atempt excedded. Please Try After Some Time.");
		else
		{
			$count = $_SESSION['attempts'];
			print("You Have : $count Attempts left.");
		}
	}
}
?>
