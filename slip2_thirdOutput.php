<?php
	$msg = $_COOKIE['msg'];
	$style = $_COOKIE['style'];
	$size = $_COOKIE['size'];
	$fc = $_COOKIE['fcolor'];
	$bc = $_COOKIE['bcolor'];
?>

<body bgcolor = '<?php echo $bc ?>'>
 	
 	<font size = '<?php echo $size ?>'  color = '<?php echo $fc?>'>
		
		<center><?php echo $msg ?></center>		<!--directly print in case of text using php tag-->
		<<?php echo $style?>>				<!--get php code in tags to display correct-->
	
	</font>
</body>
