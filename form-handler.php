<?php

$name = $_POST["name"];
$age = $_POST["age"];

echo $name;
return;

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "onlze";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

echo "<br>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";

$sql = "INSERT INTO car (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// http://localhost/dbconnection/form-handler.php?name=tt&age=2