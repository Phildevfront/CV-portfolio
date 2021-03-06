<?php

    $serveur = "https://mask.o2switch.net";
    $dbname = "baph4737_pbaurens";
    $user = "baph4737";
    $pass = "RMRvNgmAVYNv";


    $nom = $email = $message = "";
    $nomError = $emailError = $messageError = "";
    $isSuccess = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nom = verifyInput($_POST["nom"]);
        $email = verifyInput($_POST["email"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;

        if(empty($nom))
        {
            $nomError = "Veuillez remplir ce champ!";
            $isSuccess = false;
        }
        if(empty($email))
        {
            $emailError = "Veuillez remplir ce champ!";
            $isSuccess = false;
        }
        if(empty($email))
        {
            $messageError = "Veuillez remplir ce champ!";
            $isSuccess = false;
        }
        

    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;

    }
    
    
    
    $emailTo = "pbaurens.dev@gmail.com";
    
    try{
        //On se connecte à la BDD
        //$dbco = new PDO("mysql:host=localhost;dbname=pbaurens",$user,$pass);
        $dbco = new PDO("mysql:host=mask.o2switch.net;dbname=baph4737_pbaurens",$user="baph4737",$pass="RMRvNgmAVYNv");
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
        header("Location:index.php");// renvoi l'utilisateur aprés validation vers l'index.
        $headers = "From: $nom $email <$email>\r\nReply-To: $email";
        mail($emailTo, "Un message de votre site", $message , $headers);
        $nom = $email = $message = "";
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
    
?>