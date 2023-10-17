$host = '192.168.4.4';
$dbname = 'db_2205551001';
$username = '2205551001';
$password = '2205551001';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Aktifkan penanganan kesalahan
        PDO::ATTR_EMULATE_PREPARES => false, // Matikan penggantian parameter
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Mengambil hasil dalam bentuk array asosiatif
    ));
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
