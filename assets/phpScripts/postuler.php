<?php
    include "./PDO.php";
    $connexion = new Sql(1);
    
    
        
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_POST["IDoffre"]) and isset($_SESSION["IDu"]) and $_POST["IDoffre"]!="")
    {
        $table = "postuler";
        if($_SESSION["role"] =="Administrateur")
        {
            $table = "postulera";
        }
        
        $connexion->set("INSERT into ".$table."(IDoffre,IDu) VALUE(".$_POST["IDoffre"].",".$_SESSION["IDu"].");");
        
        header('Location: ./../../');
    }
    else
    {
        echo "error";
        var_dump($_POST);
    }
    
    

?>