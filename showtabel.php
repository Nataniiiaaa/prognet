<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Biodata</title>
    <style>
body {
  font-family: Arial, sans-serif;
  background-image: url('images/background.jpeg');
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  background-color: rgba(0, 0, 0, 0.5);
  margin: 0;
  padding: 0;
}


      h1 {
        text-align: center;
        color: #333;
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
    <h1>Hasil Biodata</h1>
    <table id="dataTable" border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Major</th>
            <th>Aksi</th>
            <!-- Add other table headers here -->
        </tr>
        <?php
        // Include your database connection file
        include 'koneksi.php';

        // Execute a SELECT query
        $sql = "SELECT * FROM tb_biodata"; // Replace 'your_table' with your actual table name
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $counter = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $counter++ . "</td>";
                echo "<td>" . $row["NAME"] . "</td>";
                echo "<td>" . $row["nim"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["status_user"] . "</td>";
                echo "<td>" . $row["major"] . "</td>";
                ?>
    <td>
        <button class="action-button" onclick="window.location.href='detail.php?id=<?php echo $row['id']; ?>'">Detail</button>
        <button class="action-button" onclick="window.location.href='edit.php?id=<?php echo $row['id']; ?>'">Edit</button>
        <button class="action-button" onclick="window.location.href='delete.php?id=<?php echo $row['id']; ?>'">Delete</button>
    </td>
</tr>
<?php

            }
        } else {
            echo "No data found in the database.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table><br></br>
    <a href="biodata.html"><button type="button">Add Data</a>
</body>
</html>
