<?php
include "../assets/phpScripts/redirect.php";
include "../assets/phpScripts/PDO.php";
require_once('../smarty/libs/Smarty.class.php');

$connexion = new Sql(2);
$smarty = new Smarty();


$smarty->assign('dirfile', '../tpl/recherche_user.tpl');
$smarty->assign('dircss', '../assets/css/user.css');
$smarty->assign('dirjs', '../assets/js/areyousure.js');
$smarty->assign('titre', 'Recherche de compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');

//var_dump($_SESSION);
if($_SESSION["role"]=="Administrateur"){
    $allutilisateur=$connexion->GetArray("SELECT utilisateur.IDu,NomU,PrenomU,Date_NaisU,MailU,role,AdresseA,promotion,ville.idv FROM utilisateur INNER JOIN adresse ON Utilisateur.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg INNER JOIN Classe ON ville.idv = Classe.idv INNER JOIN promotion ON Classe.IDProm = promotion.IDProm;");

}else{
    $allutilisateur=$connexion->GetArray("SELECT  utilisateur.IDu,NomU,PrenomU,Date_NaisU,MailU,role,AdresseA,promotion,ville.idv FROM utilisateur INNER JOIN etudiant ON utilisateur.IDu=etudiant.IDu  INNER JOIN Classe ON etudiant.IDClasse = Classe.IDClasse INNER JOIN promotion ON promotion.IDProm=Classe.IDProm INNER JOIN adresse ON Utilisateur.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv= ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg;");

}
$allpromotion=$connexion->GetArray("SELECT DISTINCT promotion FROM promotion;");
$allcampus=$connexion->GetArray("SELECT DISTINCT ville,ville.idv FROM ville INNER JOIN Classe ON ville.idv = Classe.idv;");

$smarty->assign('allutilisateur', $allutilisateur);
$smarty->assign('allcampus', $allcampus);
$smarty->assign('allpromotion', $allpromotion);
$smarty->assign('_SESSION', $_SESSION);
//var_dump($allutilisateur);
//var_dump($allpromotion);
$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>