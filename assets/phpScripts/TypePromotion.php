<?php
include './PDO.php';
$con = new Sql(1);
if(isset($_GET["TypePromotion"]) and $_GET["TypePromotion"]!="" )
{
    echo $con->Getjson("SELECT Nom_du_Type as nom from types_promotions where Nom_du_Type like '%".$_GET["TypePromotion"] ."%';");
    
}
else
{
    echo "[]";
}
?>