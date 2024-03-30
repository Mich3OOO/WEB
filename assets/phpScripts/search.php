<?php
include './SqlHandler.php';
$con = new SqlHandler(1);
if(isset($_GET["ville"]) and isset($_GET["reg"]) and isset($_GET["Secteur"]) and isset($_GET["Date"]) and isset($_GET["Duree"]) and isset($_GET["Poste"]) )
{
    
    $setand = false;
    $sql = "SELECT IDoffre, Poste, Ville, NomE FROM  OFFRE INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN Secteur_d_activité ON Entreprise.IdSec = Secteur_d_activité.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg";
    if($_GET["ville"][0] != "" or $_GET["reg"][0] != "" or $_GET["Secteur"][0] != "" or $_GET["Date"] != "" or $_GET["Duree"] != "" or $_GET["Poste"] != "")
    {
        $sql = $sql . " WHERE" ;
    if($_GET["ville"][0] != "")
    {
        $sql = $sql . addFiltre("ville", $_GET["ville"],$setand);
        $setand = true;
    }

    if($_GET["reg"][0] != "")
    {
        $sql = $sql . addFiltre("reg", $_GET["reg"],$setand);
        $setand = true;
    }
    if($_GET["Secteur"][0] != "")
    {
        $sql = $sql . addFiltre("Secteur_d_activité.Secteur_d_activité", $_GET["Secteur"],$setand);
        $setand = true;
    }

    if ($_GET["Date"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " Date_Stage >= '" . $_GET["Date"] . "'";
        $setand = true;
    }
    if ($_GET["Duree"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " Duree = '" . $_GET["Duree"] . "'";
        $setand = true;
    }

    if ($_GET["Poste"] != "")
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " Poste like '%" . $_GET["Poste"] . "%'";
        $setand = true;
    }
        

        
    }

    
    $sql = $sql . " ;";

    echo $con->Getjson($sql);
    //echo $sql;
    
    
}
elseif(isset($_GET["ID"]))
{
    echo $con->Getjson("SELECT *,COUNT(postuler.IDu) as post FROM  OFFRE INNER JOIN Viser ON OFFRE.IDoffre = Viser.IDoffre INNER JOIN types_de_promotions ON Viser.IDT = types_de_promotions.IDT INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN Secteur_d_activité ON Entreprise.IdSec = Secteur_d_activité.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg LEFT JOIN postuler on postuler.IDoffre =offre.IDoffre where Offre.IDoffre = " . $_GET["ID"] . ";"); 
}
else
{
    echo "[]";
}

function addFiltre($NFiltre, $tab ,$setand)
{
    
    $close = true;
    

    $r = "";

    
    for($i = 0 ; $i <count($tab); $i++)
    {
        
        if($setand)
        {
            $r = $r . " and";
            $setand = false;
        }
        if($close)
        {
            $r = $r . " ( ".$NFiltre." LIKE '%".$tab[$i] ."%'" ;
            $close = false;
        }
        else
        {
            $r = $r . " or ".$NFiltre." LIKE '%".$tab[$i] ."%'" ;
        }
        
        
    }

    if(!$close)
    {
        $r = $r . " )";

    }
    
    return $r;
}

?>