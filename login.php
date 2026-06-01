<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    }else{
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PinkMarket Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-card">

    <h1>🌸 Petal Paradise</h1>

    <?php
    if(isset($error)){
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Username"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>