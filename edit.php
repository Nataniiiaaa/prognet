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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Biodata</title>
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
        $drinkOptions = ["Air Mineral", "Teh Manis", "Kopi", "Es Jeruk", "Susu"];
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
