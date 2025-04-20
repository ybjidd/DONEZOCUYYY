<?php
$pesan = "";
$showSuccess = false;

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "donezo");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];

    if ($password !== $password_confirm) {
        $pesan = "Password tidak cocok!";
    } else {
        $query = "INSERT INTO users (fullname, email, phone, username, password)
                  VALUES ('$fullname', '$email', '$phone', '$username', '$password')";

        if (mysqli_query($conn, $query)) {
            $showSuccess = true;
        } else {
            $pesan = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Donezo</title>
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
            position: relative;
        }

        .register-container {
            display: flex;
            position: relative;
            width: 700px;
            height: 460px;
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
            padding: 30px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .form-group label {
            width: 150px;
            font-size: 18px;
            font-weight: bold;
        }

        .form-group input {
            flex-grow: 1;
            padding: 8px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .register-button {
            font-family: "Itim", cursive;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 18px;
            cursor: pointer;
            width: 120px;
            margin: 15px auto 10px;
            display: block;
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
    <div class="register-container">
        <div class="logo-section">
            <div class="logo">
                <div class="logo-text">Donezo</div>
            </div>
        </div>
        <div class="form-section">
            <h1 class="form-title">Register</h1>

            <?php if ($pesan): ?>
                <p style="color: red; text-align: center;"><?php echo $pesan; ?></p>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">No.Tlp</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirm">Konfirmasi</label>
                    <input type="password" id="password_confirm" name="password_confirm" required>
                </div>
                <button type="submit" class="register-button">Register</button>
            </form>
        </div>
    </div>

    <div id="successAlert" class="alert-overlay">
        Registrasi berhasil! Mengarahkan ke login
    </div>

    <?php if ($showSuccess): ?>
    <script>
        const alertBox = document.getElementById("successAlert");
        alertBox.style.display = "block";

        setTimeout(() => {
            window.location.href = "login.php";
        }, 2000);
    </script>
    <?php endif; ?>
</body>
</html>