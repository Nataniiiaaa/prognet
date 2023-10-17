<?php
$server = 'prognet.localnet'; 
$dbname = 'db_2205551001'; 
$username = '2205551001'; 
$password = '2205551001'; 

$conn = new mysqli($server, $dbname, $username, $password);
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
echo "Connection Successfully";
?>
