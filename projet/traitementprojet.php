<?php

//include('testbootstrap.html');

//$mysqli->real_query("SELECT * FROM utilisateurs");
       
        $host = 'localhost';
        $login = 'root';
        $mdp = 'root';
        $db = 'event2';

        $mysqli = new mysqli($host, $login, $mdp, $db);
        if ($mysqli->connect_errno) {
        echo "Erreur de connexion à MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error ;
}

//echo $mysqli->host_info . "\n";
//echo '<br>Connexion réussie !';
         
        

//mysqli_query($mysqli3, " SELECT `email` FROM `utilisateurs` WHERE `email` = '".$email."'");
//if ( mysql_num_rows($mysqli3) == 1)
//{


//if ($password == $password2) 
 
//{

//if isset($_POST[''])

        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND !empty($_POST['annee']) AND !empty($_POST['mois']) AND !empty($_POST['jour']))

      {
            
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$telephone= $_POST['telephone'];
$email= $_POST['email'];
$id = $_POST['id'];
$password = $_POST['password'];
$password2= $_POST['password2'];
$date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];



              mysqli_query($mysqli, " INSERT INTO `utilisateurs`(`id`, `nom`, `prenom`, `telephone`, `email`, `password`, `password2`,`anniversaire`) VALUES 
   (NULL, '".$nom."', '".$prenom."', '".$telephone."','".$email."', '".$password."', '".$password2."', '".$date."')" )or die (mysql_error($mysqli)); 


// Redirection
 
 header("location:accueil.html");
        }

        else
        {
          $erreur = "Tout les champs doivent etre remplis";
        }
        
		  
      
		 
		 
      //  $msg_erreur = "Erreur Remplir champs : <br/><br/>";
    //  $msg_ok = "Elements dans la base";
      //  $message = $msg_erreur;


        //verification des champs

      //  if (empty($_POST['nom']))
      //  $message .="Votre nom<br/>";

     //  if (empty($_POST['prenom']))
      //   $message .="Votre prenom<br/>";	


     //   if (empty($_POST['email']))
     //     $message .="Votre immatriculation<br/>";

    //    if (empty($_POST['password']))
       //     $message .="Votre mot de passe<br/>";

       // if (empty($_POST['telephone']))
        //    $message .="Votre telephone<br/>";

       // if (empty($_POST['password2']))
          // $message .="Mot de passe 2<br/>";

        //si champ vide afficher ce message d'erreur
          
        // if (strlen($message) > strlen($msg_erreur)) {

         //echo $message; 

        //sinon c'est bon

      //  }  else {

     //foreach($_POST as $index => $valeur) {
       // $index = mysqli_real_escape_string(trim($valeur));
        //}

       



   
//if (isset($erreur))
//{
 // echo '<script>alert(" Les champs doivent etre remplis ");</script>';

//}



  //echo " ERREUR Vous n'avez pas tapé le meme mot de passe";


//}
//else
//{  
 // echo "Mot de passe différents";
//}

		
		?>
 		