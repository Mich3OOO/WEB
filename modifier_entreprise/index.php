<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/PDO.php";
include "../assets/phpScripts/redirect.php";
$smarty = new Smarty();
$connexion = new Sql(1);

<<<<<<< HEAD
$smarty->assign('dirfile', '../html/modifier_entreprise.html');
$smarty->assign('dircss', '../assets/css/ajout_entreprise.css');
=======
$smarty->assign('dirfile', '../tpl/modifier_entreprise.tpl');
$smarty->assign('dircss', '../assets/css/postuler.css');
>>>>>>> 2c9605af96966503669864aa5d04a37c13bcb7f8
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'acceuille');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');


$hash=$connexion->GetFirstRow("SELECT IDE,NomE,AdresseA,Code_Post,ville,MailE,TelE,Site,Secteur_Act,descr,reg,N_siret   FROM Entreprise INNER JOIN Secteur_Activite ON Entreprise.IDSec = Secteur_Activite.IDSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg WHERE IDE='".$_GET['IDE']."';");


$allsect=$connexion->GetArray("SELECT DISTINCT Secteur_Act FROM secteur_activite;");

$entreprise["ID"]= $hash[0] ;
$entreprise["Nom"]= $hash[1] ;
$entreprise["Adresse"]= $hash[2] ;
$entreprise["CP"]= $hash[3] ;
$entreprise["ville"]= $hash[4] ;
$entreprise["Mail"]= $hash[5] ;
$entreprise["Tel"]= $hash[6] ;
$entreprise["site"]= $hash[7];
$entreprise["Sect_Act"]= $hash[8] ;
$entreprise["descr"]= $hash[9] ;
$entreprise["reg"]= $hash[10] ;
$entreprise["SIRET"]= $hash[11] ;
//var_dump($entreprise);
$smarty->assign('allsect', $allsect);
$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('entreprise', $entreprise);
$smarty->display("../assets/tpl/main.tpl");



?>