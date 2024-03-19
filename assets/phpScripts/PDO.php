<?php

    $user= 'root';
    $password='';

    try{
        $connexion = new PDO("mysql:host=localhost;dbname=projetweb", $user, $password);
        print "Has logrado PUTO !";
    }
    catch(PDOException $e){
        print "Erreur :". $e->getMessage() . "<br/>";
    }

?>  