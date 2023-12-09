<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ujian_51421405"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>