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
        $connexion->set("INSERT into ".$table."(IDoffre,IDu) VALUE(".$_POST["IDo"].",".$_SESSION["IDu"].");");//INSERT into interesser VALUE(1,1);DELETE FROM interesser;
        echo "done";
    }
    else
    {
        echo json_encode(array("psot" => var_dump($_POST),"session" => var_dump($_SESSION)));
    }
    

?>