<?php

$conn = pg_connect("host=localhost port=5432 dbname=test user=postgres password=123");

if (!$conn) {
    echo "Connection failed.";
    exit;
}

$query = "CREATE TABLE student (
    rolno INTEGER PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    class VARCHAR(10) NOT NULL
)";
$result = pg_query($conn, $query);

if (!$result) {
    echo "Error creating table: " . pg_last_error($conn);
    exit;
} else {
    echo "Table created successfully.<br>";
}

$insert_query = "INSERT INTO student (rolno, name, class)
VALUES 
    (1, 'John Doe', '10A'),
    (2, 'Jane Smith', '9B'),
    (3, 'Bob Johnson', '11C'),
    (4, 'Sarah Lee', '12D'),
    (5, 'Tom Brown', '8E')";

$insert_result = pg_query($conn, $insert_query);

if (!$insert_result) {
    echo "Error inserting records: " . pg_last_error($conn);
    exit;
} else {
    echo "Records inserted successfully.";
}

pg_close($conn);


function display_records($table_name) {

    $conn = pg_connect("host=localhost port=5432 dbname=test user=postgres password=123");

    if (!$conn) {
        echo "Connection failed.";
        exit;
    }

    $query = "SELECT * FROM ".$table_name;
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Error retrieving records: " . pg_last_error($conn);
        exit;
    }

    echo "<table border='1'>";
    echo "<tr><th>RolNo</th><th>Name</th><th>Class</th></tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr><td>".$row['rolno']."</td><td>".$row['name']."</td><td>".$row['class']."</td></tr>";
    }
    echo "</table>";

    pg_close($conn);
}
?>