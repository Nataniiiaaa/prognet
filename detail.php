<?php
require 'koneksi.php'; // Ini akan memasukkan koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM tb_biodata WHERE id = $id";
    $result = mysqli_query($conn, $query);

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Biodata</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
      }

      h1 {
        text-align: center;
        color: #333;
      }

      table {
    margin: 0 auto; /* Mengatur margin kiri dan kanan menjadi auto */
}



      form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      label {
        font-weight: bold;
      }

      input[type='text'],
      input[type='tel'],
      input[type='email'],
      select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      input[type='submit'] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
      }

      input[type='submit']:hover {
        background-color: #0056b3;
      }
    </style>
</head>
<body>
    <h1>Detail Biodata</h1>
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
    <div class="center-button">
    <a href="showtabel.php"><button type="button">Kembali</button></a>
</div>
</body>
</html>
