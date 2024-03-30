<?php
include './SqlHandler.php';
$con = new SqlHandler(1);
if(isset($_GET["Poste"]) and $_GET["Poste"]!="" )
{
    echo $con->Getjson("SELECT DISTINCT(Poste) as nom from offre WHERE Poste like '%".$_GET["Poste"]."%';");
    
}
else
{
    echo "[]";
}
?>