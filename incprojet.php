<?php

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";

    $entreprise = $_POST["entreprise"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $date = $_POST["date"];
    $sujet = $_POST["sujet"];
    $description = $_POST["description"];
    $logo = $_POST["logo"];

    
    
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO clients(entreprise, prenom, nom, date, sujet, description, logo)
            VALUES(:entreprise, :prenom, :nom, :date, :sujet, :description, :logo)");
        $sth->bindParam(':entreprise',$entreprise);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':date',$date);
        $sth->bindParam(':sujet',$sujet);
        $sth->bindParam(':description',$description);
        $sth->bindParam(':logo',$logo);


        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:projet-ajouter.html");
        $nom = $email = $message = "";
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
    
?>