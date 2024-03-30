<?php
    include "PDO.php";
    $connexion = new Sql(2);

    
    $hash = $connexion->GetFirstRow("Select IDu,MdpU,NomU,PrenomU,Date_NaisU,MailU,role from `utilisateur` where MailU ='".$_GET["Email"]."';");
    

    if (password_verify($_GET["Mot-de-passe"],$hash[1])== 1)
    {
        session_start();

        $_SESSION["IDu"]= $hash[0] ;
        $_SESSION["MDP"]= $hash[1] ;
        $_SESSION["Nom"]= $hash[2] ;
        $_SESSION["Prenom"]= $hash[3] ;
        $_SESSION["Date_Nais"]= $hash[4] ;
        $_SESSION["Mail"]= $hash[5] ;
        $_SESSION["Adresse"]= $hash[6] ;
        $_SESSION["role"]= $hash[7] ;

        header('Location: ../../recherche/');
    }
    else
    {  
        
        header('Location: ../../login/');
    
    }

?>