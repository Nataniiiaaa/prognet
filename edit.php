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
    <title>Edit Biodata</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <h1>Edit Biodata</h1>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $data['NAME']; ?>"><br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo $data['nim']; ?>"><br>
        <label for="birthdate">Date of Birth:</label>
        <input type="text" id="birthdate" name="birthdate" value="<?php echo $data['birthdate']; ?>"><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $data['phone']; ?>"><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $data['email']; ?>"><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $data['address']; ?>"><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $data['gender']; ?>"><br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $data['status_user']; ?>"><br>
        <label for="major">Major:</label>
        <input type="text" id="major" name="major" value="<?php echo $data['major']; ?>"><br>
        <label for="campus">Campus:</label>
        <input type="text" id="campus" name="campus" value="<?php echo $data['campus']; ?>"><br>
        <label for="hobbies">Hobbies:</label>
        <input type="text" id="hobbies" name="hobbies" value="<?php echo $data['hobbies']; ?>"><br>

        <label for="food">Favourite Foods:</label>
        <?php
        $foodOptions = ["Pizza", "Burger", "Fried Rice", "Soto", "Sop"];
        foreach ($foodOptions as $option) {
            echo "<input type='checkbox' name='food[]' value='$option'";
            if (in_array($option, explode(", ", $data['favorite_foods']))) {
                echo "checked";
            }
            echo "> $option";
        }
        echo "<br>";
        ?>

        <label for="drink">Favourite Drinks:</label>
        <?php
        $drinkOptions = ["Coffee", "Tea", "Soda", "Wine"];
        foreach ($drinkOptions as $option) {
            echo "<input type='checkbox' name='drink[]' value='$option'";
            if (in_array($option, explode(", ", $data['favorite_drinks']))) {
                echo "checked";
            }
            echo "> $option";
        }
        echo "<br>";
        ?>

        <label for="favorite-color">Favourite Color:</label>
        <input type="text" id="favorite-color" name="favorite-color" value="<?php echo $data['favorite_color']; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
