<?php
include "config.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = strtolower(str_replace(' ', '', $fullname)); // Bisa dibuat auto dari nama
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$confirm = $_POST['password-confirm'];

if ($_POST['password'] !== $confirm) {
    die("Password tidak sama!");
}

// Cek email sudah terdaftar belum
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
    die("Email sudah terdaftar!");
}

// Simpan user
$query = "INSERT INTO users (fullname, email, phone, username, password) VALUES ('$fullname', '$email', '$phone', '$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "Register berhasil! <a href='login.php'>Login disini</a>";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>
