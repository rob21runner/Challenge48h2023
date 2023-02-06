<?php

session_start();

if(isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to database to verify username and password
    $conn = mysqli_connect('hostname', 'username', 'password', 'database_name');
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Set session variable
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to home page
        header('Location: home.php');
    } else {
        echo "Invalid username or password";
    }
}
?>
<link rel="stylesheet" href="login_page.css">
<form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
    <input type="submit" name="sub" value="Login">
</form>
<script src="Content/js/login_page.js"></script>
