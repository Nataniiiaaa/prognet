<?php
$host = 'prognet.localnet'; 
$dbname = 'db_2205551001'; 
$username = '2205551001'; 
$password = '2205551001'; 

$conn = new mysqli($host, $dbname, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
