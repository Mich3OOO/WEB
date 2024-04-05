<?php
require_once('../smarty/libs/Smarty.class.php');

include "../assets/phpScripts/redirect.php";
include '../assets/phpScripts/PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }

$table = "postuler";
if($_SESSION["role"] == "Administrateur")
{
    $table = "postulera";
}
$con = new Sql($_SESSION["role"]);

$dat = $con->GetArray("SELECT *,GROUP_CONCAT(competences.Comp) as Competence FROM  ".$table." INNER JOIN Offre ON ".$table.".IDoffre = Offre.IDoffre INNER JOIN Entreprise ON Offre.IDE = Entreprise.IDE INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN ville ON adresse.idv = ville.idv INNER JOIN reg ON ville.ID_reg = reg.ID_reg INNER JOIN viser ON viser.IDoffre = Offre.IDoffre INNER JOIN types_promotions ON Viser.IDT = types_promotions.IDT INNER JOIN necessite on necessite.IDoffre = offre.IDoffre INNER JOIN competences on competences.IDComp = necessite.IDComp WHERE ".$table.".IDu = '".$_SESSION["IDu"]."' GROUP by offre.IDoffre;") ;

$smarty = new Smarty();

$dat2 =array();


$MaxPage = intdiv(count($dat),2)-1;
$p = 0;
if(isset($_GET["Page"]))
{
    $p = $_GET["Page"];
}


if ($p>$MaxPage)
{
    $p = $p-1 ;
}
if ($p<0)
{
    $p = 0 ;
}




for ($i=2*$p; $i < count($dat); $i++) { 

    if($i >= 2*$p + 2 )
    {
        break;
    }

    array_push($dat2,$dat[$i]);
    
}




$smarty->assign('Data',$dat2);



$smarty->assign('dirfile', './postule.tpl');
$smarty->assign('dircss', '../assets/css/Wishlist.css');
$smarty->assign('dirjs', '#');
$smarty->assign('titre', 'Postuler');
$smarty->assign('keywords', 'algo');
$smarty->assign('description', 'algo');
$smarty->assign('p', $p);
$smarty->assign('MaxP',$MaxPage );







$smarty->assign('_SESSION', $_SESSION);

$smarty->display("../assets/tpl/main.tpl");



?>