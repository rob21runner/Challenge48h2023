<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'XxDylanKillerxX' && $password == 'Je suis dylan le Kikoo') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        require_once('./Content/scripts/validate_step.php');
        header('Location:win-page');
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
<body id="win-page">
<a href="CONFIDENTIEL.pdf" target="_blank">CONFIDENTIEL.pdf</a>

<div class="popup">
    <div class="modal">
        <h2>Importance de faire attention aux informations que l'on donne sur le net et a qui on les donne</h2>
        <br>
        Il est important de faire attention aux données que l'on partage sur Internet, car ces informations peuvent être
        utilisées à des fins malveillantes.
        <br><br>
        Voici quelques raisons pour lesquelles il est important de protéger ses
        données en ligne :
        <br>
        <ul>
            <li>
                Protection de la vie privée : Les informations personnelles telles que les noms, les adresses, les
                numéros de téléphone et les informations de carte de crédit peuvent être collectées et utilisées par des
                personnes malveillantes pour commettre des fraudes ou des vols d'identité.
            </li>
            <li>
                Sécurité financière : Les informations de carte de crédit et les informations bancaires peuvent être
                utilisées pour effectuer des transactions non autorisées et il peut être difficile de récupérer les
                fonds perdus.
            </li>
            <li>
                Risque pour la réputation : Les informations partagées sur Internet peuvent être facilement diffusées et
                peuvent avoir un impact sur la réputation d'une personne.
            </li>
            <li>
                Cyber-harcèlement: Les informations partagées sur Internet peuvent être utilisées pour harceler ou
                menacer une personne.
            </li>
            <li>
                Protection de données sensibles : Les informations partagées sur internet peuvent être utilisées par des
                personnes malveillantes afin d'accéder à des données plus ou moins sensibles
            </li>
        </ul>
        <br>
        Il est donc important d'être vigilant quant aux informations que l'on partage sur Internet, de ne pas partager
        des informations sensibles et de vérifier les politiques de confidentialité et les paramètres de sécurité des
        sites et des applications en ligne avant de partager des informations personnelles.
        <div class="button" closeModal>Continuer</div>
    </div>
    <div class="backdrop"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="Content/js/popup.js"></script>
</body>
</html>
