<?php
$host = 'prognet.localnet'; 
$username = '2205551001'; 
$password = '2205551001'; 
$dbname = 'db_2205551001'; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
