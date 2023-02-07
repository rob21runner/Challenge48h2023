<?php
session_start();
$_SESSION['previousStepValidated'] = "Validée en chair et en os cousin";
header("Location: ../login-page.php");
exit;
