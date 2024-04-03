<?php
include './PDO.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);
$CentresEtudiant= array( "data" => flip($con->GetArray("SELECT ville as x,count(etudiant.IDu) as y from ville INNER join classe on classe.idv = ville.idv INNER join etudiant on etudiant.IDClasse = classe.IDClasse GROUP by ville;")),"Title"=> "Répartition des étudiants par centre");
$PromotionsEtudiant= array( "data" => flip($con->GetArray("SELECT Promotion as x,COUNT(etudiant.IDu) as y from classe INNER join etudiant on etudiant.IDClasse =classe.IDClasse INNER join promotion on promotion.IDProm = classe.IDProm GROUP by classe.IDprom;")),"Title"=> "Répartition des étudiants par Promotion");
$Competences= array( "data" => flip($con->GetArray("SELECT comp as x, COUNT(IDoffre) as y from competences INNer JOIN necessite on necessite.IDComp = competences.IDComp GROUP by competences.IDComp;")),"Title"=> "Taux de compétences demandées");
$Localitee= array( "data" => flip($con->GetArray("SELECT COUNT(IDoffre) as y,ville as x from offre INNER join entreprise on entreprise.IDE = offre.IDE INNER join adresse on entreprise.ID_adresse = adresse.ID_adresse INNER join ville on ville.idv = adresse.idv GROUP by ville.idv;")),"Title"=> "Répartitions des stages");
$TopWhishList= array( "data" => flip($con->GetArray("SELECT concat(Poste,' (',NomE,')') as x, count(IDu) as y from offre INNER JOIN interesser on offre.IDoffre = interesser.IDoffre INNER JOIN entreprise on entreprise.IDE = offre.IDE GROUP by offre.IDoffre LIMIT 5;")),"Title"=> "Les 5 Offres les plus ajoutée à la whishlist");
$PromotionsConcernees= array( "data" => flip($con->GetArray(" SELECT nom_du_type as x, COUNT(IDoffre) as y from types_promotions INNER join viser on viser.IDT = types_promotions.IDT GROUP by types_promotions.IDT;")),"Title"=> "Taux de promotions concernées");
$DureeStage= array( "data" => flip($con->GetArray("SELECT concat(duree,' mois') as x ,COUNT(IDoffre) as y from offre GROUP by duree;")),"Title"=> "Taux de durée du stages");
$LocaliteeEnt= array( "data" => flip($con->GetArray("SELECT COUNT(IDE) as y,ville as x from entreprise INNER join adresse on entreprise.ID_adresse = adresse.ID_adresse INNER join ville on ville.idv = adresse.idv GROUP by ville.idv;")),"Title"=> "Répartitions des entreprises");
$SecteurAct= array( "data" => flip($con->GetArray("SELECT secteur_Act as x ,COUNT(IDE) as y from secteur_activite INNER join entreprise on entreprise.IdSec = secteur_activite.IdSec GROUP by secteur_Act;")),"Title"=> "Répartition des secteur d'activitées");
$TopAnnonces= array( "data" => flip($con->GetArray("SELECT concat(Poste,' (',NomE,')') as x, count(IDu) as y from offre INNER JOIN postuler on offre.IDoffre = postuler.IDoffre INNER JOIN entreprise on entreprise.IDE = offre.IDE GROUP by offre.IDoffre  LIMIT 5;")),"Title"=> "Les 5 annonces le plus postulé");



$r = array("CentresEtudiant" =>$CentresEtudiant,"PromotionsEtudiant" =>$PromotionsEtudiant,"Competences" =>$Competences,"Localitee" =>$Localitee,"TopWhishList" =>$TopWhishList,"PromotionsConcernees" =>$PromotionsConcernees,"DureeStage" =>$DureeStage,"LocaliteeEnt" =>$LocaliteeEnt,"SecteurAct" =>$SecteurAct,"TopAnnonces" =>$TopAnnonces);

echo json_encode($r);


function flip($array) {
    $out = array();
    foreach ($array as  $rowkey => $row) {
        foreach($row as $colkey => $col){
            $out[$colkey][$rowkey]=$col;
        }
    }
    return $out;
}


?>