<?php


if (!isset($_GET['nom']) &&!isset($_GET['prenom']) &&!isset($_GET['motdepasse']))

  {
  header('Location:Stockage2.html');
  Exit;
  }
  else {
  
     if(!preg_match('/^[[:alnum:]]+$/' , $_GET['nom'] or !preg_match('/^[[:alnum:]]+$/' , $_GET['prenom'] or !preg_match('/^[[:alnum:]]+$/' , $_GET['motdepasse'])))
	 
	 {
	 echo 'Vous devez entrer uniquement des lettres ou des chiffres<br/>';
	 echo '<a href="Stockage2.html" temp_href="Stockage2.html">Réessayer</a>';
	 exit();
	 }
	 else
	 {
	 require('traitement.php');
	 $nom=$_GET['nom'];
	 $prenom=$_GET['prenom'];
	 $motdepasse=$_GET['motdepasse'];
  
  }
  ?>