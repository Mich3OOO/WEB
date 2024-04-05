<?php
include './PDO.php';
include './addfiltre.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);



//etudiant,Pilote,Admin,Promotion,Campus
if(isset($_GET["Promotion"]) and isset($_GET["Campus"]) and isset($_GET["KeyWord"]) )
{
    


    $setand = false;
    $sql = "SELECT utilisateur.IDu, utilisateur.NomU,utilisateur.prenomU,utilisateur.role,MailU FROM utilisateur LEFT JOIN etudiant on etudiant.IDu = utilisateur.IDu LEFT JOIN classe on etudiant.IDClasse = classe.IDClasse LEFT JOIN promotion on promotion.IDProm = classe.IDProm LEFT JOIN ville on ville.idv = classe.idv";
    if(!empty($_GET["Promotion"][0]) or !empty($_GET["Campus"][0]) or (isset($_GET["etudiant"]) and $_GET["etudiant"] != "") or (isset($_GET["Pilote"]) and $_GET["Pilote"] != "") or (isset($_GET["Admin"]) and $_GET["Admin"] != ""))
    {
    $sql = $sql . " WHERE" ;
    if(!empty($_GET["Promotion"][0]))
    {
        $sql = $sql . addFiltre("promotion.Promotion", $_GET["Promotion"],$setand);
        $setand = true;
    }

    if(!empty($_GET["Campus"][0]))
    {
        $sql = $sql . addFiltre("ville", $_GET["Campus"],$setand);
        $setand = true;
    }

    if (!empty($_GET["KeyWord"]))
    {
        if ($setand)
        {
            $sql = $sql . " and ";
        }
        $sql = $sql . " (nomU like '%" . $_GET["KeyWord"] . "%' or PrenomU like '%" . $_GET["KeyWord"] . "%')";
        $setand = true;
    }

    $roles =array();

    if ((isset($_GET["etudiant"]) and !empty($_GET["etudiant"]) and $_GET["etudiant"] == '1'))
    {
        array_push($roles,"Etudiant");

    }

    if (isset($_GET["Pilote"]) and !empty($_GET["Pilote"]) and $_GET["Pilote"] == '1')
    {
        array_push($roles,"Pilote");

    }
    if (isset($_GET["Admin"]) and !empty($_GET["Admin"]) and $_GET["Admin"] == '1')
    {
        array_push($roles,"Administrateur");

    }
    if(count($roles)>0)
    {
        $sql = $sql . addFiltre("role", $roles,$setand);
        $setand = true;
    }
        
    }

    
    $sql = $sql . " ;";

    echo $con->Getjson($sql);
    //echo $sql;

    
    
    
}
elseif(isset($_GET["ID"]))
{

    echo $con->Getjson("SELECT * FROM utilisateur LEFT JOIN etudiant on etudiant.IDu = utilisateur.IDu LEFT JOIN classe on etudiant.IDClasse = classe.IDClasse LEFT JOIN promotion on promotion.IDProm = classe.IDProm LEFT JOIN ville on ville.idv = classe.idv where utilisateur.IDu = " . $_GET["ID"] . ";");
    //echo "SELECT *,COUNT(postuler.IDu) as post,GROUP_CONCAT(competences.Comp) as Competence,n1.IDu as canpost FROM  OFFRE INNER JOIN Viser ON OFFRE.IDoffre = Viser.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN Département ON Ville.ID_reg = Département.ID_reg LEFT JOIN postuler on postuler.IDoffre =offre.IDoffre INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp LEFT join ((SELECT * from ".$table." WHERE IDu = ".$_SESSION["IDu"].") as n1) on n1.IDoffre = offre.IDoffre where Offre.IDoffre = " . $_GET["ID"] . ";" ;
}
else
{
    echo "[]";
}


?>