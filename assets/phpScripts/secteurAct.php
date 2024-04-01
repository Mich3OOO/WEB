<?php
include './PDO.php';
$con = new Sql(1);
if(isset($_GET["secteur"]) and $_GET["secteur"]!="" )
{
    echo $con->Getjson("Select secteur_activite.secteur_activite as nom from secteur_activite where secteur_activite.secteur_activite like '%".$_GET["secteur"] ."%';");
    
}
else
{
    echo "[]";
}
?>