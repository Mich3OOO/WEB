<?php
include './PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);
if(isset($_GET["Promotion"]) and $_GET["Promotion"]!="" )
{
    echo $con->Getjson("SELECT Promotion  as nom from promotion where Promotion like '%".$_GET["Promotion"] ."%';");
}
else
{
    echo "[]";
}
?>