<?php
include("koneksi.php");

// Inisialisasi variabel
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = "";

$loginError = "";

// Cek apakah formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gantilah dengan validasi login sesuai kebutuhan
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh validasi sederhana (gunakan metode keamanan yang lebih kuat di produksi)
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        session_start(); // Mulai sesi
        $_SESSION['username'] = $username; // Set informasi 'username' ke dalam sesi
        header("Location: tambah_data.php");
        exit();
    } else {
        $loginError = "Login gagal. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Login Form</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <span style="color: red;"><?php echo $loginError; ?></span><br>

        <input type="submit" value="Login">
        <input type="button" onclick= "location.href='register.php';" value="Register">
    </form>
</body>
</html>
