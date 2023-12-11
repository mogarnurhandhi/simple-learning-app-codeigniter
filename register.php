<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

$error = '';

if(isset($_POST['register'])){
    // Ambil data dari form registrasi
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi data
    if(empty($name) || empty($email) || empty($password)){
        $error = "Mohon lengkapi semua field";
    } else {
        // Lakukan koneksi ke database
        $connection = mysqli_connect('localhost','root','','exceptional') or die("Database Not connected".mysqli_connect_error());

        // Escape karakter khusus pada data
        $name = mysqli_real_escape_string($connection, $name);
        $email = mysqli_real_escape_string($connection, $email);

        // Query untuk mengecek apakah email sudah terdaftar sebelumnya
        $query = "SELECT * FROM mhsiswa WHERE email = '$email'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
            $error = "Email sudah terdaftar, silakan gunakan email lain";
        } else {
            // Enkripsi password sebelum disimpan ke database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Query untuk menyimpan data registrasi ke tabel mhsiswa
            $query = "INSERT INTO mhsiswa (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
            $insertResult = mysqli_query($connection, $query);

            if($insertResult){
                // Registrasi berhasil
                $success = "Registrasi berhasil! Silakan login dengan email dan password Anda.";
            } else {
                $error = "Terjadi kesalahan saat melakukan registrasi";
            }
        }

        // Tutup koneksi database
        mysqli_close($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>UNIPMA LEARNING SYSTEM REGISTER TO SITE</title>
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
            background-color: rgba(255, 255, 255, 0.8);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .container form .form-group label {
            font-weight: bold;
        }
        .container form .form-group input[type="text"],
        .container form .form-group input[type="email"],
        .container form .form-group input[type="password"] {
            border-radius: 3px;
        }
        .container form .form-group .btn {
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
        <h2 class="mb-4">Register To Site</h2>
        <?php if(isset($error)): ?>
            <p class="text-danger"><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if(isset($success)): ?>
            <p class="text-success"><?php echo $success; ?></p>
        <?php else: ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
            </form>
            <p class="mt-3">Sudah punya akun? <a href="login.php">Login disini</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
