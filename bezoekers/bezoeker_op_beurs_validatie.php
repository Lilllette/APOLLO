<html lang="en">
<head>
	<title>Bezoeker aanmelding validatie</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<?php

if (empty($_POST["naam"])) {
	die("Naam is nodig");
}


print_r($_POST);

?>
