<?php
require 'koneksi.php'; // Ini akan memasukkan koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $birthdate = $_POST["birthdate"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $status = $_POST["status"];
    $major = $_POST["major"];
    $campus = $_POST["campus"];
    $hobbies = $_POST["hobbies"];
    $favoriteFoods = implode(", ", $_POST["food"]);
    $favoriteDrinks = implode(", ", $_POST["drink"]);
    $favoriteColor = $_POST["favorite-color"];

    $sql = "UPDATE tb_biodata SET 
            NAME = '$name',
            nim = '$nim',
            birthdate = '$birthdate',
            phone = '$phone',
            email = '$email',
            address = '$address',
            gender = '$gender',
            status_user = '$status',
            major = '$major',
            campus = '$campus',
            hobbies = '$hobbies',
            favorite_foods = '$favoriteFoods',
            favorite_drinks = '$favoriteDrinks',
            favorite_color = '$favoriteColor'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
        echo '<script>window.location = "showtabel.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Permintaan tidak valid.";
}

$conn->close();
?>
