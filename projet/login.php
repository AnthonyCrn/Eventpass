<?php


$host = 'localhost';
        $login = 'root';
        $mdp = 'root';
        $db = 'event2';

        $mysqli = new mysqli($host, $login, $mdp, $db);
        if ($mysqli->connect_errno) {
        echo "Erreur de connexion à MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error ;
}

if(!empty($_POST['email']) AND !empty($_POST['password'])
{
	$email= $_POST['email'];
	$password =$_POST['password'];

	mysqli_query($mysqli, " SELECT * FROM `utilisateurs` WHERE `email` = '".$email."' AND `password` = '".$password."' " )or die (mysql_error($mysqli)); 

//$result = " SELECT * FROM `utilisateurs` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
//$sql = mysqli_query($mysqli, $result);


$rows = mysqli_num_rows($mysqli);

if ( $rows== 1)
{
 header("location:accueil.html");
}
else
{
	echo " Paswword et Id inco";
}
}





?>