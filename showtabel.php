<?php
require 'koneksi.php'; // Ini akan memasukkan koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Biodata</title>
</head>
<body>
    <h1>Hasil Biodata</h1>
    <table id="dataTable" border="1">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>NIM</th>
        <th>Date of Birth</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Major</th>
        <th>Campus</th>
        <th>Hobbies</th>
        <th>Favourite Foods</th>
        <th>Favourite Drinks</th>
        <th>Favourite Color</th>
        <th>Aksi</th>
      </tr>
      <?php
      $counter = 1;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "<tr>";
          echo "<td>" . $counter++ . "</td>";
          echo "<td>" . $_POST["name"] . "</td>";
          echo "<td>" . $_POST["nim"] . "</td>";
          echo "<td>" . $_POST["birthdate"] . "</td>";
          echo "<td>" . $_POST["phone"] . "</td>";
          echo "<td>" . $_POST["email"] . "</td>";
          echo "<td>" . $_POST["address"] . "</td>";
          echo "<td>" . $_POST["gender"] . "</td>";
          echo "<td>" . $_POST["status"] . "</td>";
          echo "<td>" . $_POST["major"] . "</td>";
          echo "<td>" . $_POST["campus"] . "</td>";
          echo "<td>" . $_POST["hobbies"] . "</td>";

          echo "<td>";
          if (isset($_POST["food"]) && is_array($_POST["food"])) {
              echo implode(", ", $_POST["food"]);
          } else {
              echo "No favorite foods selected.";
          }
          echo "</td>";

          echo "<td>";
          if (isset($_POST["drink"]) && is_array($_POST["drink"])) {
              echo implode(", ", $_POST["drink"]);
          } else {
              echo "No favorite drinks selected.";
          }
          echo "</td>";

          echo "<td>" . $_POST["favorite-color"] . "</td>";
        // Kolom Aksi
        echo "<td>";
        echo "<a href='detail.php'>Detail</a> | ";
        echo "<a href='edit.php'>Edit</a> | ";
        echo "<a href='delete.php'>Delete</a>";
        echo "</td>";
          echo "</tr>";
      } else {
          echo "Data belum dikirim. Silakan isi formulir terlebih dahulu.";
      }
      ?>
    </table>
</body>
</html>
