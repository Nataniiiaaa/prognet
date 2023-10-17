<?php
require 'koneksi.php'; // Ini akan memasukkan koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM biodata WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirm"])) {
    // Hapus entri berdasarkan ID yang diberikan
    $deleteQuery = "DELETE FROM biodata WHERE id = $id";
    if (mysqli_query($koneksi, $deleteQuery)) {
        echo "Data berhasil dihapus. <a href='showtabel.php'>Kembali ke Tabel Biodata</a>";
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Biodata</title>
</head>
<body>
    <h1>Delete Biodata</h1>
    <p>Apakah Anda yakin ingin menghapus data berikut?</p>
    <table border="1">
        <tr>
            <td>Name:</td>
            <td><?php echo $data['NAME']; ?></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><?php echo $data['nim']; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $data['birthdate']; ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $data['phone']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $data['email']; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $data['address']; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $data['gender']; ?></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td><?php echo $data['status_user']; ?></td>
        </tr>
        <tr>
            <td>Major:</td>
            <td><?php echo $data['major']; ?></td>
        </tr>
        <tr>
            <td>Campus:</td>
            <td><?php echo $data['campus']; ?></td>
        </tr>
        <tr>
            <td>Hobbies:</td>
            <td><?php echo $data['hobbies']; ?></td>
        </tr>
        <tr>
            <td>Favourite Foods:</td>
            <td><?php echo $data['favorite_foods']; ?></td>
        </tr>
        <tr>
            <td>Favourite Drinks:</td>
            <td><?php echo $data['favorite_drinks']; ?></td>
        </tr>
        <tr>
            <td>Favourite Color:</td>
            <td><?php echo $data['favorite_color']; ?></td>
        </tr>
    </table>

    <form method="post">
        <input type="submit" name="confirm" value="Hapus">
        <a href="showtabel.php">Batal</a>
    </form>
</body>
</html>
