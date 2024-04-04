<?php

    include "PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }
    $connexion = new Sql($_SESSION["role"]);

    
    $hash = $connexion->GetFirstRow("SELECT IDu,MdpU,NomU,PrenomU,Date_NaisU,MailU,role,adresseA from `utilisateur` inner join adresse on utilisateur.ID_adresse=adresse.ID_adresse where MailU ='".$_GET["Email"]."';");
    

    if (password_verify($_GET["Mot-de-passe"],$hash[1])== 1)
    {
        session_start();

        $_SESSION["IDu"]= $hash[0] ;
        $_SESSION["MDP"]= $hash[1] ;
        $_SESSION["Nom"]= $hash[2] ;
        $_SESSION["Prenom"]= $hash[3] ;
        $_SESSION["Date_Nais"]= $hash[4] ;
        $_SESSION["Mail"]= $hash[5] ;
        $_SESSION["Adresse"]= $hash[7];
        $_SESSION["role"]= $hash[6] ;

        header('Location: ../../recherche/');
    }
    else
    {  
        
        header('Location: ../../login/');
    
    }

?>