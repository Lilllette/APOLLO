<html lang="en">
<head>
	<title>Standhouder aanmelding validatie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<?php

if (empty($_POST["naam"])) {
	die("Naam is nodig");
}

if (empty($_POST["email"])) {
	die("E-mail adress is nodig");
} 

if (empty($_POST["standhouder_beschrijving"])) {
	die("Standhouder beschrijving is nodig");
}

if (empty($_POST["product/dienst_informatie"])) {
	die("Product of dienstinformatie is nodig");
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

$wachtwoord_hash = password_hash($_POST["wachtwoord"], PASSWORD_DEFAULT);    

print_r($_POST);

header("Location: succesvolle_aanmelding.html");

?>
