<?php
include './PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);

$table = "interesser";
if($_SESSION["role"] == "Administrateur")
{
    $table = "interessera";
}

if(isset($_SESSION["IDu"]) and isset($_GET["Nom"]))
{
    
    echo $con->Getjson("SELECT offre.IDoffre, NomE, adresseA, ville, reg, Nom_du_Type, Poste FROM  ".$table." INNER JOIN Offre ON ".$table.".IDoffre = Offre.IDoffre INNER JOIN Entreprise ON Offre.IDE = Entreprise.IDE INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg INNER JOIN viser ON viser.IDoffre = Offre.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT where ".$table.".IDu = " . $_SESSION["IDu"] ." and Poste like '%".$_GET["Nom"]."%';" );
}
elseif(isset($_GET["ID"]))
{
    echo $con->Getjson("SELECT *,GROUP_CONCAT(competences.Comp) as Competence FROM  ".$table." INNER JOIN Offre ON ".$table.".IDoffre = Offre.IDoffre INNER JOIN Entreprise ON Offre.IDE = Entreprise.IDE INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg INNER JOIN viser ON viser.IDoffre = Offre.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp where offre.IDoffre = " . $_GET["ID"] .";" );
}else
{
    echo "[]";
}
?>


