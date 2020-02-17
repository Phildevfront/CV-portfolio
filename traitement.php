<?php

    $serveur = "localhost";
    $dbname = "pbaurens";
    $user = "root";
    $pass = "root";
    
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $emailTo = "pbaurens.dev@gmail.com";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(nom, email, message)
            VALUES(:nom, :email, :message)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':message',$message);


        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:form-merci.html");
        $headers = "From: $nom $email <$email>\r\nReply-To: $email";
        mail($emailTo, "Un message de votre site", $message , $headers);
        $nom = $email = $message = "";
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
    
?>