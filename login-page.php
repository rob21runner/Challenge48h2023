<?php

require('Content/scripts/check_previous_step.php');

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
    <input type="submit" name="submit" value="Se connecter">
    <input type="submit" name="sub" value="Login">
</form>
</body>
</html>

<div class="popup">
    <div class="modal">
        <h2>Faille URL</h2>
        <br>
        Une faille URL (ou faille dans l'URL) est une vulnérabilité informatique qui peut se produire lorsqu'une application Web utilise des entrées utilisateur dans une URL sans les valider ou les filtrer adéquatement. Cela peut permettre à un attaquant de manipuler les données d'URL pour injecter du code malveillant ou accéder à des informations sensibles.
        <br><br>
        Par exemple, une application qui utilise des entrées utilisateur dans une URL pour afficher des informations en fonction de l'ID utilisateur peut être vulnérable à une faille URL si les entrées utilisateur ne sont pas correctement validées. Un attaquant pourrait manipuler l'ID utilisateur pour afficher des informations sensibles ou injecter du code malveillant dans la page Web.
        <br><br>
        Pour éviter les failles URL, il est important de valider et de filtrer soigneusement toutes les entrées utilisateur, y compris les entrées dans les URLs. Les développeurs doivent également utiliser des technologies telles que les sessions et les jetons pour authentifier les utilisateurs et limiter les actions autorisées en fonction de l'utilisateur connecté.
        <div class="button" closeModal>Continuer</div>
    </div>
    <div class="backdrop"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="Content/js/login_page.js"></script>
<script src="Content/js/popup.js"></script>
