<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./01_registerPage.css">
</head>
<body>
    <form action="./01_register.php" method="POST">
        <h1>User Register Form</h1>
        Name: <input type="text" name="uname" placeholder="enter your name here" required>
        <br>

        Email: <input type="email" name="umail" placeholder="enter your email here" required>
        <br>

        Password: <input type="password" name="upwd" placeholder="enter your password here" required>
        <br>

        City: <input type="text" name="ucity" placeholder="enter your city here">
        <br>

        <input type="submit" name="ubtn" >


    </form>
</body>
</html>