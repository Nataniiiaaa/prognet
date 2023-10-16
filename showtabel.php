<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

#result {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    border: 1px solid #ccc; /* Border for the whole table */
}

.form-table th, .form-table td {
    border: 1px solid #ccc; /* Border for table cells */
    padding: 8px;
    text-align: left;
}

.form-table th {
    background-color: #f2f2f2;
}

#result p {
    margin: 0;
    padding: 0;
}

#result strong {
    font-weight: bold;
}

#result h2 {
    text-align: center;
    color: #333;
}

    </style>
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
