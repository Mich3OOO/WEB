<?php
include "PDO.php";
$connexion = new Sql(1);

$idsect=$connexion->GetFirstRow("SELECT IdSec FROM secteur_activite WHERE Secteur_Act='".$_GET["Secteur_Act"]."';");

$connexion->Update("UPDATE entreprise INNER JOIN adresse ON entreprise.ID_adresse=adresse.ID_adresse INNER JOIN ville ON ville.idv=adresse.idv INNER JOIN reg ON reg.ID_reg=ville.ID_reg INNER JOIN Secteur_activite ON Secteur_activite.IdSec=entreprise.IdSec SET NomE='".$_GET["Nom"]."',
AdresseA='".$_GET["Adresse"]."',
Code_Post='".$_GET["CP"]."',
ville='".$_GET["Ville"]."',
MailE='".$_GET["Mail"]."',
TelE='".$_GET["Tel"]."',
Site='".$_GET["site"]."',
entreprise.idSec='".$idsect[0]."',
descr='".$_GET["descr"]."',
reg='".$_GET["Region"]."',
N_siret='".$_GET["SIRET"]."' WHERE IDE ='".$_GET["ID"]."';");

var_dump($_GET);

header('Location: ../../recherche_Entreprise/');