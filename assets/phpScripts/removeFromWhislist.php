<?php
    include "./PDO.php";
    $connexion = new Sql(1);
    
    
        
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_POST["IDo"]) and isset($_SESSION["IDu"]) and $_POST["IDo"]!="")
    {
        $table = "interesser";
        if($_SESSION["role"] =="Administrateur")
        {
            $table = "interessera";
        }
        
        $connexion->set("DELETE FROM ".$table." where IDu = ".$_SESSION["IDu"]." and IDoffre = ".$_POST["IDo"].";");//DELETE FROM ".$table." where IDu = ".$_POST["IDu"]." and IDoffre = ".$_POST["IDo"].";
    }
    else
    {
        echo "error";
    }
    
    

?>