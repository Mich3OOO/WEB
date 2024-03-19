<?php
include './SqlHandler.php';
$con = new SqlHandler(1);
if(isset($_GET["ville"]) and isset($_GET["reg"]) and isset($_GET["Secteur"]) and isset($_GET["Date"]) and isset($_GET["Duree"]) and isset($_GET["Contrat"]) )
{
    
    $setand = false;
    $sql = "SELECT * FROM  OFFRE INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN Secteur_d_activité ON Entreprise.IdSec = Secteur_d_activité.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg";
    if($_GET["ville"] != "" or $_GET["reg"] != "" or $_GET["Secteur"] != "" or $_GET["Date"] != "" or $_GET["Duree"] != "" or $_GET["Contrat"] != "")
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
        $sql = $sql . addFiltre("Secteur_d_a_ctivité", $_GET["Secteur"],$setand);
        $setand = true;
    }
    if($_GET["Contrat"][0] != "")
    {
        $sql = $sql . addFiltre("Type_Contrat", $_GET["Contrat"],$setand);
        $setand = true;
    }

    if ($_GET["Date"] != "")
    {
        
        $sql = $sql . " and Date_Stage = '" . $_GET["Date"] . "'";
    }
    if ($_GET["Duree"] != "")
    {
        $sql = $sql . " and Duree = '" . $_GET["Duree"] . "'";
    }
        

        
    }

    
    $sql = $sql . " ;";

    echo $sql;
    
    
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