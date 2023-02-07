<?php
//
//require('Content/scripts/check_previous_step.php');
//
//if (isset($_POST['sub'])) {
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    // Connect to database to verify username and password
//    $conn = mysqli_connect('hostname', 'username', 'password', 'database_name');
//    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
//    $result = mysqli_query($conn, $query);
//
//    if (mysqli_num_rows($result) > 0) {
//        // Set session variable
//        $_SESSION['loggedin'] = true;
//        $_SESSION['username'] = $username;
//
//        // Redirect to home page
//        header('Location: home.php');
//    } else {
//        echo "Invalid username or password";
//    }
//}
//?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/css/style.css">
    <title>Document</title>
</head>
<body id="admin-page">
<h1>Vous êtes utilisateur mais pas administrateur, dommage...</h1>
</body>
</html>

<div class="popup">
    <div class="modal">
        <h2>Injection SQL</h2>
        <br>
        Une faille par injection SQL est une vulnérabilité informatique qui se produit lorsqu'une entrée utilisateur
        malveillante est injectée dans une requête SQL, ce qui peut permettre à un attaquant de manipuler la base de
        données. Cela peut entraîner la divulgation de données sensibles, la modification ou la suppression de données,
        ou même l'exécution de code malveillant sur le serveur.
        <br><br>
        Les injections SQL se produisent généralement lorsque des données d'entrée utilisateur ne sont pas correctement
        validées et filtrées avant d'être utilisées dans une requête SQL. Les attaquants peuvent injecter du code SQL
        malveillant en utilisant des caractères tels que les apostrophes ou les accolades pour tromper la requête SQL et
        exécuter du code malveillant.
        <br><br>
        Pour éviter les injections SQL, il est important de valider soigneusement toutes les entrées utilisateur et de
        filtrer les caractères dangereux. Il est également recommandé d'utiliser des technologies telles que les
        paramètres de requête préparés pour garantir que les requêtes SQL sont exécutées de manière sécurisée.
        <div class="button" closeModal>Continuer</div>
    </div>
    <div class="backdrop"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="Content/js/login_page.js"></script>
<script src="Content/js/popup.js"></script>



