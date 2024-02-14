<?php 
    include "service/database.php";

    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
        $result = mysqli_query($db, $query);

        if ($result) {
            echo "Register Success";
        } else {
            echo "Register Failed";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register Account</h1>
    <form action="register.php" method="post" >
        <input type="text" placeholder="username" name="username">
        <br>
        <input type="password" placeholder="password" name="password">
        <br>
        <button type="submit" name="register"  >Register</button>
    </form>
    <hr>
    <a href="login.php">Login</a>
    <?php
    include "layout/footer.html";
    ?>
</body>
</html>