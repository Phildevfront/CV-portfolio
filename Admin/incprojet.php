<?php

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $date = $_POST["date"];
    $sujet = $_POST["sujet"];
    $description = $_POST["description"];

    
    $emailTo = "pbaurens.dev@gmail.com";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO projet(prenom, nom, date, sujet, description)
            VALUES(:prenom, :nom, :date, :sujet, :description)");
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':date',$date);
        $sth->bindParam(':sujet',$sujet);
        $sth->bindParam(':description',$description);


        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:projet-ajouter.html");
        $nom = $email = $message = "";
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
    
?>