<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page gave you up</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Content/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
</head>

<body id="not-found">
<main>
    <img src="Content/img/lambda-logo-white.svg" alt="lambda-logo" class="logo">
    <div class="error-code">
        <div>4</div>
        <div>0</div>
        <div>4</div>
    </div>
    <p id="error-message">
        <span class="word">Nous</span>
        <span class="word">sommes</span>
        <span class="word">désolés,</span>
        <span class="word">cette</span>
        <span class="word">page</span>
        <span class="word">n’existe</span>
        <span class="word">pas</span>
    </p>


    <!--
    Lorem
    amet
    sit
    consectetur
    ipsum
    dolor

    vrai
    plait
    login
    plait
    Le
    vous
    s'il

    dog
    brown
    lazy
    the
    quick
    the
    jumps
    fox
    over
    -->
</main>

<video src="Content/media/404-loop.webm" autoplay muted loop></video>
</body>

<script src="Content/js/404Animations.js"></script>
</html>
