<?php
session_start();

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to database to verify username and password
    $host = "127.0.0.1";
    $dbname = "challenge48h";
    $user = "user";
    $password = "P@ssword";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM Challenge WHERE user = '$username'");
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);


    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


    if (!empty($result)) {
        // Set session variable
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to home page
         header('Location:user-page.php');
    } else {
        echo "Invalid username or password";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/css/style.css">
    <title>Document</title>
</head>
<body id="login-page">
<form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
    <input type="submit" name="sub" value="Login">
</form>
<script src="Content/js/login_page.js"></script>
