<?php
include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";
include "../assets/phpScripts/addfiltre.php";

require_once('../smarty/libs/Smarty.class.php');
if(!isset($_SESSION))
    {
        session_start();
    }

$connexion = new Sql($_SESSION["role"]);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/recherche_Entreprise.tpl');
$smarty->assign('dircss', '../assets/css/recherche_Entreprise.css');
$smarty->assign('dirjs', '../assets/js/recherche.js');
$smarty->assign('titre', 'Recherche une entreprise');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

$allentreprise=$connexion->GetArray("SELECT IDE,NomE,descr,MailE, TelE, Site,AdresseA,Secteur_Act FROM Entreprise INNER JOIN Secteur_Activite ON Entreprise.IDSec = Secteur_Activite.IDSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg ".GetFiltres().";");

$smarty->assign('allentreprise', $allentreprise);
$smarty->assign('_SESSION', $_SESSION);


$smarty->display("../assets/tpl/main.tpl");

function GetFiltres()
{
    $r = "";
    $setand = false;

    if((isset($_GET["Ville"]) and $_GET["Ville"][0] != "") or (isset($_GET["SectAct"]) and $_GET["SectAct"][0] != "") or (isset($_GET["Dep"]) and $_GET["Dep"][0] != ""))
    {
        $r = $r . " WHERE" ;
    

        if((isset($_GET["Ville"]) and $_GET["Ville"][0] != ""))
        {
            $r = $r . addFiltre("Ville", $_GET["Ville"],$setand);
            $setand = true;
        }
        if((isset($_GET["SectAct"]) and $_GET["SectAct"][0] != ""))
        {
            $r = $r . addFiltre("Secteur_Act", $_GET["SectAct"],$setand);
            $setand = true;
        }
        if(isset($_GET["Dep"]) and $_GET["Dep"][0] != "")
        {
            $r = $r . addFiltre("reg", $_GET["Dep"],$setand);
            $setand = true;
        }

    }


    return $r; 
    
}



?>