<?php
$str=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
	<BookStore>
<Books>
<PHP>
	<Title>Programming in PHP</Title>
	<Publication>O'RELLY</Publication>
</PHP>
<PHP>
	<Title>Beginners PHP</Title>
	<Publication>2000</Publication>
</PHP>
</Books>
</BookStore>
XML;
	$fname="bookstore.xml";
	$fp=fopen($fname,"w");
	fwrite($fp,$str);
	fclose($fp);
	echo"created filename is:".$fname;
?>
