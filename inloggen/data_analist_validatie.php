<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inlog Validatie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<?php

if (empty($_POST["naam"])) {
	die("Naam is nodig");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	die("Juiste e-mail adress is nodig");
}

if (strlen($_POST["wachtwoord"]) < 8) {
	die("Wachtwoord moet minimaal 8 karakters zijn");
}

if ( ! preg_match("/[a-z]/i",$_POST["wachtwoord"])) {
	die("Wachtwoord moet minimaal een letter bevatten");
}
        
if ( ! preg_match("/[0-9]/i",$_POST["wachtwoord"])) {
	die("Wachtwoord moet minimaal een nummer bevatten");
}
 
if ($_POST["wachtwoord"] !== $_POST["wachtwoord_comformatie"]) {
	die("Beide wachtwoorden moeten gelijk zijn");
}

$wachtwoord_hash = wachtwoord_hash($_POST["wachtwoord"], PASSWORD_DEFAULT);    

print_r($_POST);
var_dump($wachtwoord_hash);

header("Location: succesvolle_inlog.html");

?>
