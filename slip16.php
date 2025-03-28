<html>
	<body>
		<center><b>BOOKS</b></center>
		<table border = 1>
			<th>BOOK CODE</th>
			<th>BOOK NAME</th>
			<th>BOOK AUTHOR</th>
			<th>BOOK PRICE</th>
			<th>BOOK YEAR</th>
		<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
	
			$name = $_GET['q'];
			$xml = simplexml_load_file("slip6_book.xml");
		
			foreach($xml->children() as $books)
			{
				if($books->book_name == $name)
				{
					print("<tr><td>$books->book_no</td>");
					print("<td>$books->book_name</td>");
					print("<td>$books->author_name</td>");
					print("<td>$books->price</td>");
					print("<td>$books->year</td></tr>");
				}
			}
		?>
		</table>
	</body>
</html>

