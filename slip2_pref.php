<?php
	$msg = $_POST['msg'];
	$style = $_POST['style'];
	$size = $_POST['size'];
	$fc = $_POST['fcolor'];
	$bc = $_POST['bcolor'];
	
	setcookie('msg', $msg);
	setcookie('style', $style);
	setcookie('size', $size);
	setcookie('fcolor', $fc);
	setcookie('bcolor', $bc);
?>
<table border = 1>
	<tr>
		<td><b>Message : </b></td>
		<td><b><?php echo $msg ?></b></td>		
	</tr>
	<tr>
		<td><b>Style : </b></td>
		<td><b><?php echo $style ?></b></td>		
	</tr>
	<tr>
		<td><b>Size : </b></td>
		<td><b><?php echo $size ?></b></td>		
	</tr>
	<tr>
		<td><b>Foreground Color : </b></td>
		<td><b><?php echo $fc ?></b></td>		
	</tr>
	<tr>
		<td><b>Background Color : </b></td>
		<td><b><?php echo $bc ?></b></td>		
	</tr>
</table>

<br>
<a href = "slip2_thirdOutput.php">Apply Preferences</a>

