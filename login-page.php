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
        header('Location:user-page');
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

<div class="popup">
    <div class="modal">
        <h2>Recherche informations</h2>
        <br>
        Les commentaires dans le code sont importants, car ils fournissent une description claire et concise des
        sections spécifiques du code.
        Cependant, il est crucial de ne pas inclure des informations sensibles ou importantes dans les commentaires du
        code.
        <br><br>
        Si des informations confidentielles sont laissées dans les commentaires, elles peuvent facilement être exposées
        et compromise, ce qui peut entraîner des conséquences graves pour la sécurité de l'entreprise et la vie privée
        des utilisateurs.
        <br><br>
        De plus, les commentaires peuvent souvent être vus par d'autres développeurs qui travaillent
        sur le même projet, il est donc important de s'assurer que les commentaires sont appropriés et ne contiennent
        pas d'informations sensibles.
        <br><br>
        En résumé, il est toujours préférable de ne pas inclure des informations sensibles
        ou importantes dans les commentaires du code pour préserver la sécurité et la confidentialité des données.
        <div class="button" closeModal>Continuer</div>
    </div>
    <div class="backdrop"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="Content/js/login_page.js"></script>
<script src="Content/js/popup.js"></script>
</body>
</html>


