<?php

$host = "192.168.56.104";
$dbname = "inloggen";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

                     
if ($mysqli->connect_errno) {
    die("Connectie fout: " . $mysqli->connect_error);
}

return $mysqli;

?>
