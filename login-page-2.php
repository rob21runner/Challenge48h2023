<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'XxDylanKillerxX' && $password == 'Je suis dylan le Kikoo') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location:win-page.php');
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
</form>
