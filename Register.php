<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style_register.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Register Akun</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <span style="color: red;"><?php echo $loginError; ?></span><br>

        <input type="submit" value="Login">
        <input type="button" onclick="location.href='register.php';" value="Register">
    </form>
</body>
</html>