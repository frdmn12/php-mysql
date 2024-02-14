<?php 
include "service/database.php";

   if (isset($_POST["login"])) {
       $username = $_POST["username"];
       $password = $_POST["password"];

       $query = "SELECT * FROM users WHERE user = '$username'";
         $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                if (password_verify($password, $row["password"])) {
                    echo "Login Success";
                } else {
                    echo "Login Failed";
                }
            } else {
                echo "Login Failed";
            }
        } else {
            echo "Login Failed";
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
    <h1>Login Account</h1>
    <form action="login.php" method="post">
        <input type="text" placeholder="username" name="username">
        <br>
        <input type="password" placeholder="password" name="password">
        <br>
        <button type="submit" name="login" >Login</button>
    </form>
    <hr>
    <a href="register.php">Register</a>
    <?php
    include "layout/footer.html";
    ?>
</body>

</html>