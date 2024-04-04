<?php
include './PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);
if(isset($_GET["secteur"]) and $_GET["secteur"]!="" )
{
    echo $con->Getjson("SELECT secteur_activite.Secteur_Act as nom from secteur_activite where secteur_activite.Secteur_Act like '%".$_GET["secteur"] ."%';");
    
}
else
{
    echo "[]";
}
?>