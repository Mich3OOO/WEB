<?php
include './PDO.php';
include './addfiltre.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);




if(isset($_GET["Ville"]) and isset($_GET["Département"]) and isset($_GET["SécteurA"]) and isset($_GET["Date_début"]) and isset($_GET["durée"]) and isset($_GET["KeyWord"]) and isset($_GET["Prom"]) )
{
    $table = "interesser";
    if($_SESSION["role"] == "Administrateur")
    {
        $table = "interessera";
    }
    


    $setand = false;
    $sql = "SELECT n1.IDu as IDu ,offre.IDoffre as IDoffre, Poste, Ville, NomE FROM  OFFRE INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN reg ON Ville.ID_reg = reg.ID_reg LEFT join ((SELECT * from ".$table." WHERE IDu = ".$_SESSION["IDu"].") as n1) on n1.IDoffre = offre.IDoffre INNER JOIN viser on offre.IDoffre = viser.IDoffre inner join types_promotions on types_promotions.IDT = viser.IDT";
    if($_GET["Ville"][0] != "" or $_GET["Département"][0] != "" or $_GET["SécteurA"][0] != "" or $_GET["Date_début"] != "" or $_GET["durée"] != "" or $_GET["KeyWord"] != "" or $_GET["Prom"][0] !="")
    {
        $sql = $sql . " WHERE" ;
    if($_GET["Ville"][0] != "")
    {
        $sql = $sql . addFiltre("Ville", $_GET["Ville"],$setand);
        $setand = true;
    }

    if($_GET["Département"][0] != "")
    {
        $sql = $sql . addFiltre("reg", $_GET["Département"],$setand);
        $setand = true;
    }
    if($_GET["SécteurA"][0] != "")
    {
        $sql = $sql . addFiltre("secteur_activite.secteur_Act", $_GET["SécteurA"],$setand);
        $setand = true;
    }
    if($_GET["Prom"][0] != "")
    {
        $sql = $sql . addFiltre("nom_du_type", $_GET["Prom"],$setand);
        $setand = true;
    }

    if ($_GET["Date_début"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " Date_Stage >= '" . $_GET["Date_début"] . "'";
        $setand = true;
    }
    if ($_GET["durée"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " duree = '" . $_GET["durée"] . "'";
        $setand = true;
    }

    if ($_GET["KeyWord"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " Poste like '%" . $_GET["KeyWord"] . "%'";
        $setand = true;
    }
        

        
    }

    
    $sql = $sql . " ;";

    echo $con->Getjson($sql);
    //echo $sql;
    
    
}
elseif(isset($_GET["ID"]))
{
    $table = "postuler";
    if($_SESSION["role"] =="Administrateur")
    {
        $table = "postulera";
    }


    echo $con->Getjson("SELECT *,COUNT(postuler.IDu) as post,GROUP_CONCAT(competences.Comp) as Competence,n1.IDu as canpost FROM  OFFRE INNER JOIN Viser ON OFFRE.IDoffre = Viser.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN reg ON Ville.ID_reg = reg.ID_reg LEFT JOIN postuler on postuler.IDoffre =offre.IDoffre INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp LEFT join ((SELECT * from ".$table." WHERE IDu = ".$_SESSION["IDu"].") as n1) on n1.IDoffre = offre.IDoffre where Offre.IDoffre = " . $_GET["ID"] . ";");
    //echo "SELECT *,COUNT(postuler.IDu) as post,GROUP_CONCAT(competences.Comp) as Competence,n1.IDu as canpost FROM  OFFRE INNER JOIN Viser ON OFFRE.IDoffre = Viser.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN Département ON Ville.ID_reg = Département.ID_reg LEFT JOIN postuler on postuler.IDoffre =offre.IDoffre INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp LEFT join ((SELECT * from ".$table." WHERE IDu = ".$_SESSION["IDu"].") as n1) on n1.IDoffre = offre.IDoffre where Offre.IDoffre = " . $_GET["ID"] . ";" ;
}
else
{
    echo "[]";
}


?>