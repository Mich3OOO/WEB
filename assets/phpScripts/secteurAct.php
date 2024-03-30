<?php
include './SqlHandler.php';
$con = new SqlHandler(1);
if(isset($_GET["secteur"]) and $_GET["secteur"]!="" )
{
    echo $con->Getjson("Select Secteur_d_activité.Secteur_d_activité as nom from Secteur_d_activité where Secteur_d_activité.Secteur_d_activité like '%".$_GET["secteur"] ."%';");
    
}
else
{
    echo "[]";
}
?>