<?php

include "PDO.php";
$connexion = new Sql(1);
var_dump($_GET['IDu']);
$req=$connexion->delete("DELETE FROM utilisateur WHERE IDu='".$_GET['IDu']."';");

//header('Location: ../../recherche_user/');