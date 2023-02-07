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

<div class="popup">
    <div class="modal">
        <h2>Importance de faire attention aux informations que l'on donne sur le net et a qui on les donne</h2>
        <br>
        Un hash est une fonction de hachage qui prend en entrée une valeur quelconque de longueur variable et renvoie
        une valeur fixe de longueur (appelée "empreinte", "digest" ou "hash") qui représente de manière unique l'entrée.
        Les fonctions de hachage sont souvent utilisées pour vérifier l'intégrité des données, en associant une
        empreinte unique à un ensemble de données, qui peut être comparée à une empreinte ultérieure pour détecter tout
        changement non autorisé.
        <br><br>
        Il existe plusieurs algorithmes de fonctions de hachage, chacun ayant ses propres caractéristiques en termes de
        sécurité, de vitesse et de taille de la valeur de hachage. Voici quelques exemples courants de fonctions de
        hachage :
        <br>
        <ul>
            <li>
                MD5 (Message-Digest Algorithm 5)
            </li>
            <li>
                SHA-1 (Secure Hash Algorithm 1)
            </li>
            <li>
                SHA-2 (Secure Hash Algorithm 2)
            </li>
            <li>
                SHA-3 (Secure Hash Algorithm 3)
            </li>
            <li>
                BLAKE2
            </li>
            <li>
                SHA-256
            </li>
            <li>
                SHA-512
            </li>
        </ul>
        <br>
        Il est important de noter que certaines de ces fonctions de hachage, telles que MD5 et SHA-1, sont considérées
        comme peu sûres en raison de leur faible capacité à résister aux collisions et aux attaques de hachage.
        <br><br>
        Les algorithmes SHA-2 et SHA-3 sont considérés comme plus sécurisés et sont largement utilisés dans des applications
        telles que la signature numérique et la génération de jetons de sécurité.
        <div class="button" closeModal>Continuer</div>
    </div>
    <div class="backdrop"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="Content/js/popup.js"></script>
</body>
</html>
