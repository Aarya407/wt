<?php
$con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=123") 
    or die("Unable to connect to database");

$username = pg_escape_string($_POST['uname']);
$password = pg_escape_string($_POST['password']);

$result = pg_query_params($con, 
    "SELECT * FROM users WHERE username = $1 AND password = $2", 
    array($username, $password)
);

if (pg_num_rows($result) > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password";
}

pg_close($con);
?>