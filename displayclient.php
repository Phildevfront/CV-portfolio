<?php 

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";

    $entreprise = $_POST["entreprise"];
     

    try{

        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $reponse = $dbco->query('SELECT * FROM clients WHERE id');
        $clients = $reponse->fetch();
        echo ('<img src="./img/'. $clients['logo'].'">');
        echo ("<h1>" . $clients['entreprise'] ." ". $clients['nom'] . "</h1>");
        echo ("<h4>" . $clients['sujet'] ." ". $clients['description'] . "</h4>");
        echo ("<p>" . $clients['description'] . "</p>");
        echo ("<h4>" . $clients['date'] . "</h4>");
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>