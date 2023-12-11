<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit;
}

$error = '';

if(isset($_POST['login'])){
    // Ambil data dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi data
    if(empty($email) || empty($password)){
        $error = "Mohon lengkapi semua field";
    } else {
        // Lakukan koneksi ke database
        $connection = mysqli_connect('localhost','root','','exceptional') or die("Database Not connected".mysqli_connect_error());

        // Escape karakter khusus pada data
        $email = mysqli_real_escape_string($connection, $email);

        // Query untuk mendapatkan data user dari database
        $query = "SELECT * FROM mhsiswa WHERE email = '$email'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Verifikasi password
            if(password_verify($password, $storedPassword)){
                // Autentikasi berhasil
                $_SESSION['username'] = $row['name'];
                header("Location: home.php");
                exit;
            } else {
                $error = "Password yang Anda masukkan salah";
            }
        } else {
            $error = "Email tidak ditemukan";
        }

        // Tutup koneksi database
        mysqli_close($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>UNIPMA LEARNING SYSTEM LOGIN TO SITE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/tab1.png" sizes="16x16">
	<link rel="icon" type="image/png" href="images/tab.png" sizes="32x32">
    <style>
        body {
            background-image: url('images/loginbg.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid #ddd;
            padding: 40px;
            border-radius: 5px;
            background-color: #fff;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .container form .form-group label {
            font-weight: bold;
        }
        .container form .form-group input[type="email"],
        .container form .form-group input[type="password"] {
            border-radius: 3px;
        }
        .container form .form-group button[type="submit"] {
            width: 100%;
        }
        .container p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Login  To Site</h2>
        <?php if(isset($error)): ?>
            <p class="text-danger"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
        </form>
        <p class="mt-3">Belum punya akun? <a href="register.php">Daftar disini</a></p>
        <p class="mt-3">Login sebagai admin? <a href="gotoep/index.php">Login disini</a></p>
    </div>
</body>
</html>
