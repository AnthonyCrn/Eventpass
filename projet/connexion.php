<?php


        $host = 'localhost';
        $login = 'root';
        $mdp = 'root';
        $db = 'event2';

        $bdd = mysqli_connect('mysql:host=127.0.0.1;dbname= event2' , 'root', 'root');


        $mysqli = new mysqli($host, $login, $mdp, $db);
        if ($mysqli->connect_errno) {
        echo "Erreur de connexion à MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error ;

}


      // $email = $_POST['email']);
	  // $password= $_POST['password']);


	 
//$sq=mysqli_query($bdd, " SELECT * FROM `utilisateurs` WHERE `email` = '".$email."' " )or die (mysqli_error($bdd)); 

//$res=$connect->query($sq);
//$data=mysqli_fetch_array($res);
           
 // if($res== false ) {
  	
  


 // }
 // else
 // 	{
//echo "Votre adresse n'est pas connu";
 // 	}

//$requser->$bdd->prepare(" SELECT * FROM `utilisateurs` WHERE `email`= '".$email."' ") ;
//$requser->execute(array($email, $password));

  //$userexist = $requser->rowCount();
 // if($userexist ==1)
 // {

 // }
 // else
  //{
  //	$erreur = " Mauvais email"; 
  //}

 //else {
	//if ($password == $password2)
	//{
	
	//	$reponse = mysql_query($mysqli1);
	//}
//}


?>