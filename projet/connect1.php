<?php
	
$host = 'localhost';
$login = 'root';
$password = 'root';
$db = 'applic';

$mysqli = new mysqli($host, $login, $password, $db);
if ($mysqli->connect_errno) {
    echo "Erreur de connexion à MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
//echo '<br>Connexion réussie !'


	
?>