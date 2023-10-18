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
            <th>Birthdate</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Major</th>
            <th>Campus</th>
            <th>Hobbies</th>
            <th>Favorite Foods</th>
            <th>Favorite Drinks</th>
            <th>Favorite Color</th>
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
                echo "<td>" . $row["birthdate"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["status_user"] . "</td>";
                echo "<td>" . $row["major"] . "</td>";
                echo "<td>" . $row["campus"] . "</td>";
                echo "<td>" . $row["hobbies"] . "</td>";
                echo "<td>" . $row["favorite_foods"] . "</td>";
                echo "<td>" . $row["favorite_drinks"] . "</td>";
                echo "<td>" . $row["favorite_color"] . "</td>";
                // Add other table data here
                echo "</tr>";
                ?>
                <tr>
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
    </table>
</body>
</html>
