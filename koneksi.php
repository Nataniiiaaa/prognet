<?php
$host = '192.168.4.4'; 
$dbname = 'db_2205551001'; 
$username = '2205551001'; 
$password = '2205551001'; 

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Atur opsi lainnya jika diperlukan
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
