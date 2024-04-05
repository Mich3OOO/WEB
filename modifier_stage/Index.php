<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/PDO.php";
include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();
if(!isset($_SESSION))
    {
        session_start();
    }

$connexion = new Sql($_SESSION["role"]);

$smarty->assign('dirfile', '../tpl/modifier_stage.tpl');
$smarty->assign('dircss', '../assets/css/stage.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Modifer un Stage');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');


$hash=$connexion->GetFirstRow("SELECT offre.IDoffre,Poste,Duree,remune,Date_Stage,Nb_place,Offre.Descr,necessite.IDComp,Nom_du_Type,offre.IDE FROM offre  INNER JOIN necessite ON necessite.IDoffre=offre.IDoffre INNER JOIN Competences ON Competences.IDComp = necessite.IDComp INNER JOIN viser ON viser.IDoffre=offre.IDoffre INNER JOIN types_promotions ON types_promotions.IDT= viser.IDT WHERE offre.IDoffre='".$_GET['ID']."';");

$allentreprise=$connexion->GetArray("SELECT IDE,NomE,descr,MailE, TelE, Site,AdresseA,Secteur_Act FROM Entreprise INNER JOIN Secteur_Activite ON Entreprise.IDSec = Secteur_Activite.IDSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg;");
$entreprise=$connexion->GetFirstRow("SELECT NomE FROM entreprise INNER JOIN offre ON Offre.IDE=Entreprise.IDE WHERE Offre.IDoffre= '".$_GET["ID"]."';");

$allcomp=$connexion->GetArray("SELECT DISTINCT Comp FROM Competences;");
$alltypepromo=$connexion->GetArray("SELECT DISTINCT Nom_du_Type FROM types_promotions;");

$offre["ID"]= $hash[0] ;
$offre["Poste"]= $hash[1] ;
$offre["Duree"]= $hash[2] ;
$offre["Remune"]= $hash[3] ;
$offre["Date_Stage"]= $hash[4] ;
$offre["Nb_Place"]= $hash[5] ;
$offre["Descr"]= $hash[6] ;
$offre["Comp"]= $hash[7];
$offre["typepromo"]= $hash[8] ;
$offre["Entreprise"]= $hash[9] ;

//var_dump($entreprise);
$smarty->assign('allentreprise', $allentreprise);
$smarty->assign('allcomp', $allcomp);
$smarty->assign('entreprise', $entreprise);
$smarty->assign('alltypepromo', $alltypepromo);

$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('offre', $offre);
$smarty->display("../assets/tpl/main.tpl");



?>