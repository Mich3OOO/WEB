<?php
    include "SqlHandler.php";
    $con = new SqlHandler(1);

    
    $hash = $con->GetFirstRow("Select MdpU, IDu , role from `utilisateur` where MailU ='".$_GET["Email"]."';");


    if (password_verify($_GET["Mot-de-passe"],$hash[0])== 1)
    {
        session_start();

        $_SESSION[session_id()]= array("MDP"=>$hash[0],"IDu"=>$hash[0],"role"=>$hash[2]);

        header('Location: ../../../Connexion_étudiant.php');
    }
    else
    {   
        header('Location: ../../../Authentification.php');
    
    }

?>