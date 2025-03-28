<html>
	<body>
		<center><b>BOOKS</b></center>
		<center>
		<table border = 1>
			<th>NAME</th>
			<th>ROLL NO</th>
			<th>COURSE</th>
			<th>SEMESTER</th>
		
			<?php
				ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);

				$str = <<<XML
						<?xml version = "1.0" ?>
						<students>
							<student>
								<name>Rohan</name>
								<rollNo>23</rollNo>
								<course>BCA</course>
								<semester>1</semester>
							</student>
							<student>
								<name>Ravya</name>
								<rollNo>24</rollNo>
								<course>BSC</course>
								<semester>2</semester>
							</student>
							<student>
								<name>Riya</name>
								<rollNo>25</rollNo>
								<course>BCS</course>
								<semester>3</semester>
							</student>
							<student>
								<name>Raghav</name>
								<rollNo>26</rollNo>
								<course>BCS</course>
								<semester>4</semester>
							</student>
							<student>
								<name>Ramesh</name>
								<rollNo>27</rollNo>
								<course>BCS</course>
								<semester>5</semester>
							</student>
						</students>
						XML;
						  
				$fname = "slip24_student.xml";
				
				$fp = fopen($fname, "w");
				
				fwrite($fp, $str);
				
				fclose($fp);
				
				echo("FILE CREATED : ");
				echo($fname);
				
				$course = $_GET['q'];
				$xml = simplexml_load_file($fname);
					
				foreach($xml->children() as $student)
				{
					if($student->course == $course)
					{
						print("<tr><td>$student->name</td>");
						print("<td>$student->rollNo</td>");
						print("<td>$student->course</td>");
						print("<td>$student->semester</td></tr>");
					}
				}
			?>
		</table>
		</center>
	</body>
</html>

