<?php 

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";

    $name = $_POST["name"];
     

    try{

        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sth = $dbco->prepare('SELECT * FROM clients  WHERE id = ?');
        $sth->execute (array($_GET['id']));
        $clients = $reponse->fetch();

        
        echo ('<img class="display" src="./img/'. $clients['logo'].'">');
        echo ("<h1 class=display>" . $clients['entreprise'] ." ". $clients['nom'] . "</h1>");
        echo ("<h4 class=display>" . $clients['sujet'] ." ". $clients['description'] . "</h4>");
        echo ("<p>" . $clients['description'] . "</p>");
        echo ("<h4>" . $clients['date'] . "</h4>");
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

?>