<?php
session_start();
$pesan = "";
$showSuccess = false;

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "donezo");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika form login dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $username;
        $showSuccess = true; // Tampilkan alert login berhasil
        // Redirect setelah alert tampil
        header("Refresh: 2; URL=task_page.php"); // redirect ke halaman tugas setelah 2 detik
    } else {
        $pesan = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Donezo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Itim", cursive;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #333;
        }

        .login-container {
            display: flex;
            position: relative;
            width: 700px;
            height: 460px;
            border: 2px solid #0088cc;
            border-radius: 10px;
            overflow: hidden;
        }

        .logo-section {
            width: 200px;
            background-color: #4D4D4D;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .logo {
            width: 140px;
            height: 140px;
            background-color: #FFE9BA;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-text {
            font-family: "Jacques Francois Shadow", serif;
            font-size: 30px;
            font-weight: normal;
            color: #000;
        }

        .form-section {
            flex-grow: 1;
            background-color: #C2C2C2;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-group label {
            width: 100px;
            font-size: 18px;
            font-weight: bold;
        }

        .form-group input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-button {
            background-color: #000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            width: 120px;
            margin: 20px auto 10px;
            display: block;
        }

        .register-link {
            text-align: center;
            color: #0088cc;
            font-size: 14px;
            text-decoration: none;
            padding: 10px 10px;
            margin: 10px auto 20px;
            display: block;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #ff0000;
            text-align: center;
            margin-bottom: 15px;
        }

        .alert-overlay {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color:rgb(108, 108, 108);
            color: white;
            padding: 16px 30px;
            border-radius: 8px;
            font-size: 18px;
            z-index: 9999;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-section">
            <div class="logo">
                <div class="logo-text">Donezo</div>
            </div>
        </div>
        <div class="form-section">
            <h1 class="form-title">Login</h1>
            <?php if(!empty($pesan)): ?>
                <div class="error-message"><?php echo $pesan; ?></div>
            <?php endif; ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-button">Masuk</button>
                <a href="register.php" class="register-link">Belum punya akun? daftar</a>
            </form>
        </div>
    </div>

    <div id="successAlert" class="alert-overlay">
        Login berhasil! Mengarahkan ke halaman tugas
    </div>

    <?php if ($showSuccess): ?>
    <script>
        const alertBox = document.getElementById("successAlert");
        alertBox.style.display = "block";

        setTimeout(() => {
            alertBox.style.display = "none";
        }, 2000);
    </script>
    <?php endif; ?>
</body>
</html>
