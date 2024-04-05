<?php
require_once('../smarty/libs/Smarty.class.php');
include "../assets/phpScripts/PDO.php";
    
include "../assets/phpScripts/redirect.php";
if(!isset($_SESSION))
    {
        session_start();
    }
$connexion = new Sql($_SESSION["role"]);
$smarty = new Smarty();

$smarty->assign('dirfile', '../tpl/modifier_compte.tpl');
$smarty->assign('dircss', '../assets/css/modifier_compte.css');
$smarty->assign('dirjs', '../assets/js/areyousure.js');

$smarty->assign('titre', 'Modifier Compte');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');


$hash = $connexion->GetFirstRow("SELECT utilisateur.IDu,MdpU,NomU,PrenomU,Date_NaisU,MailU,role,adresseA,promotion,Code_Post,ville,reg from utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg LEFT JOIN Classe ON Classe.idv = ville.idv left JOIN promotion ON Classe.IDProm=promotion.IDProm  where MailU ='".$_GET["email"]."' GROUP BY MailU  ;");
$StockCampus = $connexion->GetFirstRow("SELECT Classe.idv FROM Classe left JOIN ville ON ville.idv = CLasse.idv left JOIN adresse ON adresse.idv = ville.idv left JOIN Utilisateur ON Utilisateur.ID_adresse = adresse.ID_adresse WHERE MailU ='".$_GET["email"]."';");
$StockVille = $connexion->GetFirstRow("SELECT ville FROM ville WHERE idv = '".$StockCampus[0]."';");
//var_dump("SELECT utilisateur.IDu,MdpU,NomU,PrenomU,Date_NaisU,MailU,role,adresseA,promotion,Code_Post,ville,reg from utilisateur INNER JOIN adresse ON utilisateur.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg left JOIN Classe ON Classe.idv = ville.idv left JOIN promotion ON Classe.IDProm=promotion.IDProm where MailU ='".$_GET["email"]."';");
$allpromotion=$connexion->GetArray("SELECT DISTINCT promotion FROM promotion;");
$allcampus=$connexion->GetArray("SELECT DISTINCT ville FROM Ville INNER JOIN Classe ON Classe.idv = ville.idv;");
$allVille=$connexion->GetArray("SELECT DISTINCT ville FROM ville;");
$allRegion=$connexion->GetArray("SELECT DISTINCT reg FROM reg;");
$allCP=$connexion->GetArray("SELECT DISTINCT Code_Post FROM ville;");
$allrole=$connexion->GetArray("SELECT DISTINCT role FROM utilisateur;");

$usermodif["IDu"]= $hash[0] ;
$usermodif["MDP"]= $hash[1] ;
$usermodif["Nom"]= $hash[2] ;
$usermodif["Prenom"]= $hash[3] ;
$usermodif["Date_Nais"]= $hash[4] ;
$usermodif["Mail"]= $hash[5] ;
$usermodif["role"]= $hash[6] ;
$usermodif["Adresse"]= $hash[7];
$usermodif["promotion"]= $hash[8] ;
$usermodif["campus"]= $StockVille[0] ;
$usermodif["CP"]= $hash[9];
$usermodif["Ville"]= $hash[10] ;
$usermodif["Region"]= $hash[11] ;

//var_dump($usermodif);

$smarty->assign('allpromotion', $allpromotion);
$smarty->assign('allcampus', $allcampus);
$smarty->assign('allVille', $allVille);
$smarty->assign('allRegion', $allRegion);
$smarty->assign('allCP', $allCP);
$smarty->assign('allrole', $allrole);

$smarty->assign('usermodif', $usermodif);
$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>