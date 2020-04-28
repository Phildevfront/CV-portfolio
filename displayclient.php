<?php 

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";

  
     

    try
    {
        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
        
    $reponse = $dbco->query('SELECT entreprise, sujet, logo FROM clients WHERE entreprise = ?');
        $clients = $reponse->fetch();

        
        echo ('<img src="./img/'. $clients['logo'].'">');
        echo ("<h1>" . $clients['entreprise'] ." ". "</h1>");
        echo ("<h4>" . $clients['sujet'] ." ". "</h4>");
         
    

?>