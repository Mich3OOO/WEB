<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
include '../assets/phpScripts/PDO.php';
$con = new Sql(1);


$smarty = new Smarty();

$smarty->assign('dirfile', './postuler.tpl');
$smarty->assign('dircss', '../assets/css/postuler.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Postuler');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');
$smarty->assign('Data',$con->GetFirstRow("SELECT *,COUNT(postuler.IDu) as post,GROUP_CONCAT(competences.Comp) as Competence FROM  OFFRE INNER JOIN Viser ON OFFRE.IDoffre = Viser.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN entreprise ON Offre.IDE = entreprise.IDE INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg LEFT JOIN postuler on postuler.IDoffre =offre.IDoffre INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp where Offre.IDoffre = " . $_GET["IDoffre"] . ";") );


$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('IDoffre', $_GET["IDoffre"] );

$smarty->display("../assets/tpl/main.tpl");



?>