<?php
// Pastikan Anda sudah memasukkan file koneksi.php yang berisi konfigurasi koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $hobbies = implode(", ", $_POST["hobbies"]);
    $favoriteFoods = implode(", ", $_POST["food"]);
    $favoriteDrinks = implode(", ", $_POST["drink"]);
    $favoriteColor = $_POST["favorite-color"];

    // SQL statement untuk memasukkan data ke dalam tabel biodata
    $sql = "INSERT INTO biodata (NAME, nim, birthdate, phone, email, address, gender, status_user, major, campus, hobbies, favorite_foods, favorite_drinks, favorite_color)
            VALUES ('$name', '$nim', '$birthdate', '$phone', '$email', '$address', '$gender', '$status', '$major', '$campus', '$hobbies', '$favoriteFoods', '$favoriteDrinks', '$favoriteColor')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "Data belum dikirim. Silakan isi formulir terlebih dahulu.";
}
?>
