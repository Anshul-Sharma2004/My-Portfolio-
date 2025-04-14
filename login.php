<?php
session_start();

if (isset($_POST['uname']) && isset($_POST['upwd'])) {
    $host = 'localhost';
    $db_user = 'root';
    $db_pass = '@Nshul123'; 
    $db_name = 'portphp'; 

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $username = trim($_POST['uname']);
    $password = trim($_POST['upwd']);
    

    
echo "Username entered: " . $username . "<br>";
echo "Password entered: " . $password . "<br>";

    // Use prepared statements to prevent SQL injection and properly handle variables
    $stmt=$conn->prepare("SELECT U_PASSWORD FROM userlogin WHERE U_NAME = ? ");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($stored_password);
    $stmt->fetch();

        // Now compare the password
        if ($password === $stored_password) {
            echo "Stored Password from DB: '$stored_password'<br>";
            echo "Entered Password: '$password'<br>";

            setcookie("logged_in", "true", time() + (86400 * 30), "/"); 
            header("Location: http://localhost/portPhp/01_home.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-container show-form">
    <h2>Login My Portfolio</h2>
    <?php if (isset($error)): ?>
        <p class="error-message"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="uname" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="upwd" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Login">
        </div>
    </form>

    <a href="./01_registerForm.php" class="signup">Register</a>
</div>

</body>
</html>





