<?php
session_start();
if(!isset($_SESSION['previousStepValidated'])
    || $_SESSION['previousStepValidated'] !== "Validée en chair et en os cousin") {
    header("Location: 404");
}
