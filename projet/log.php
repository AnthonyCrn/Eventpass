<?php




 if(isset($_POST['_username']) && isset($_POST['_password'])) {



        $email= $_POST['_username'];
        $password =$_POST['_password'];

       // $connect= mysql_connect('localhost', 'root' , 'root');
      //  mysqli_select_db('event2');

        $host = 'localhost';
        $login = 'root';
        $mdp = 'root';
        $db = 'event2';

        $mysqli =  mysqli_connect($host, $login, $mdp, $db);
         if (mysqli_connect_errno()) {
        echo "Erreur de connexion à MySQL: ("  . mysqli_connect_errno . ") " . mysqli_connect_errno ;
}


       $result = mysqli_query($mysqli , "SELECT * FROM `utilisateurs` WHERE `email` = '".$email."' AND `password` = '".$password."' ");
        
       // echo " SELECT * FROM `utilisateurs` WHERE `email` = '".$email."' AND `password` = '".$password."'";

if ($result===false ) {
        echo "erreur query";

        exit;
}


        $rows = mysqli_num_rows($result);
        if ($rows==1)

        {
                echo "login correct";
                //header("location:accueil.html");

        }else {
                echo "Pseudo ou password incorrect";




}

echo "ok";
}






?>