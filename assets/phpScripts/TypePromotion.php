<?php
include './PDO.php';
$con = new Sql(1);
if(isset($_GET["TypePromotion"]) and $_GET["TypePromotion"]!="" )
{
    echo $con->Getjson("SELECT nom_du_type as nom from types_de_promotions where nom_du_type like '%".$_GET["TypePromotion"] ."%';");
    
}
else
{
    echo "[]";
}
?>