<?php
    include "PDO.php";
    $connexion = new Sql(2);

    
    $hash = $connexion->GetFirstRow("Select IDu,MdpU, role from `utilisateur` where MailU ='".$_GET["Email"]."';");


    if (password_verify($_GET["Mot-de-passe"],$hash[1])== 1)
    {
        session_start();

        $_SESSION["IDu"]= $hash[0] ;
        $_SESSION["MDP"]= $hash[1] ;
        $_SESSION["role"]= $hash[2] ;
        header('Location: ../../../recherche/');
    }
    else
    {  
        
        header('Location: ../../../login/');
    
    }

?>