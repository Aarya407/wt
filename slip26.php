<?php
$con=pg_connect("host=localhost port=5432 dbname=test user=postgres passsword=123") or die("unable to connect");
$tno=$_GET['tno'];
$q="Select * from employee where eno=$1";
$result=pg_query_params($con,$q,array(tno))
if(pg_num_rows($result)>0){
	$row=pg_fetch_assoc($result);
	echo "<p>Name:",$row['ename']."</p>";
	echo "<p>designation:",$row['designation']."</p>";
	echo "<p>salary:",$row['salary']."</p>";
}else{
	echo "no record found";
}
?>