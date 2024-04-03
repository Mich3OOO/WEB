<?php
include './PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);
if(isset($_GET["TypePromotion"]) and $_GET["TypePromotion"]!="" )
{
    echo $con->Getjson("SELECT Nom_du_Type as nom from types_promotions where Nom_du_Type like '%".$_GET["TypePromotion"] ."%';");
    
}
else
{
    echo "[]";
}
?>