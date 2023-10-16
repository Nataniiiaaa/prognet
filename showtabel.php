<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hasil Biodata</h1>
    <div id="result">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Hii!Ini  Biodata dirimu:</h2>";
            echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
            echo "<p><strong>NIM:</strong> " . $_POST["nim"] . "</p>";
            echo "<p><strong>Date of Birth:</strong> " . $_POST["birthdate"] . "</p>";
            echo "<p><strong>Phone:</strong> " . $_POST["phone"] . "</p>";
            echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
            echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
            echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
            echo "<p><strong>Status:</strong> " . $_POST["status"] . "</p>";
            echo "<p><strong>Major:</strong> " . $_POST["major"] . "</p>";
            echo "<p><strong>Campus:</strong> " . $_POST["campus"] . "</p>";
            echo "<p><strong>Hobbies:</strong> " . $_POST["hobbies"] . "</p>";

            echo "<p><strong>Favorite Foods:</strong> ";
            if (isset($_POST["food"]) && is_array($_POST["food"])) {
                echo implode(", ", $_POST["food"]);
            } else {
                echo "No favorite foods selected."; // Or any other appropriate message
            }
            
            echo "</p>";

            echo "<p><strong>Favorite Drinks:</strong> ";
            if (isset($_POST["drink"]) && is_array($_POST["drink"])) {
                echo implode(", ", $_POST["drink"]);
            } else {
                echo "No favorite drinks selected."; // Or any other appropriate message
            }
            
            echo "</p>";

            echo "<p><strong>Favorite Color:</strong> " . $_POST["favorite-color"] . "</p>";
        } else {
            echo "Data belum dikirim. Silakan isi formulir terlebih dahulu.";
        }
        ?>
    </div>
</body>
</html>
