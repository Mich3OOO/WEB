<?php
    include "./PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }

    $connexion = new Sql($_SESSION["role"]);
    
    
        
    

    if(isset($_POST["Note"]) and isset($_SESSION["IDu"]) and $_POST["Note"]!="" and isset($_POST["IDE"]) and $_POST["IDE"]!= "" )
    {
       
        $connexion->set("DELETE FROM note where IDE = ".$_POST["IDE"]." and IDu =".$_SESSION["IDu"].";");
        $connexion->set("INSERT INTO note(IDu,NoteU,IDE) VALUES(".$_SESSION["IDu"].",".$_POST["Note"].",".$_POST["IDE"].");");
        echo "done";
    }
    else
    {
        echo json_encode(array("post" => var_dump($_POST),"session" => var_dump($_SESSION)));
    }
    

?>