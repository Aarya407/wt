<html>
<body>
<?php
	$xml=simplexml_load_file('book.xml');
?>
<center><b>Book Deatils</b></center>
<table border=1>
	<th>Book Category</th>
	<th>Book Code</th>
	<th>Book Name</th>
	<th>Book Author</th>
	<th>Book Price</th>
	<th>Book Year</th>
	
<?php
	foreach($xml->books as $a)
	{
	echo"<tr><td>".$a['category']."<br>";
	echo"<td>".$a->book_no."<br>";
	echo"<td>".$a->book_name."<br>";
	echo"<td>".$a->author_name."<br>";
	echo"<td>".$a->price."<br>";
	echo"<td>".$a->year."<br>";
	}
?>
</table>
