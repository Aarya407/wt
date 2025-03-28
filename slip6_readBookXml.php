<html>
	<body>
		<?php
			$xml = simplexml_load_file("slip6_book.xml");
		?>
		
		<center><b>BOOKS</b></center>
		<table border = 1>
			<th>BOOK CODE</th>
			<th>BOOK NAME</th>
			<th>BOOK AUTHOR</th>
			<th>BOOK PRICE</th>
			<th>BOOK YEAR</th>
		
		<?php
			foreach($xml->children() as $books)
			{
				print("<tr><td>$books->book_no</td>");
				print("<td>$books->book_name</td>");
				print("<td>$books->author_name</td>");
				print("<td>$books->price</td>");
				print("<td>$books->year</td></tr>");
			}
		?>
		</table>
	</body>
</html>
