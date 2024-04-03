<?php
    include "./PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }
    $connexion = new Sql($_SESSION["role"]);
    
    
        


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