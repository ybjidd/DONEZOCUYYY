<?php
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user'] = $row['fullname'];
        echo "Login berhasil! <a href='tampilanutamayangkosong.php'>Lanjut ke Home</a>";
        exit;
    }
}
echo "Username atau Password salah!";
?>