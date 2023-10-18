<?php
// Include file koneksi.php untuk menghubungkan ke database
include('koneksi.php');

// Ambil data dari formulir
$name = $_POST['name'];
$nim = $_POST['nim'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$major = $_POST['major'];
$campus = $_POST['campus'];
$hobbies = $_POST['hobbies'];
$food = implode(', ', $_POST['food']); // Menggabungkan array makanan menjadi string
$drink = implode(', ', $_POST['drink']); // Menggabungkan array minuman menjadi string
$favoriteColor = $_POST['favorite-color'];

// Query SQL untuk menambahkan data ke tabel 'biodata'
$query = "INSERT INTO biodata (NAME, nim, birthdate, phone, email, address, gender, status_user, major, campus, hobbies, favorite_foods, favorite_drinks, favorite_color) 
VALUES ('$name', '$nim', '$birthdate', '$phone', '$email', '$address', '$gender', '$status', '$major', '$campus', '$hobbies', '$food', '$drink', '$favoriteColor')";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil disimpan.";
} else {
    echo "Data gagal disimpan. Error: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
