<?php
    include "PDO.php";
    $connexion = new Sql(1);

    if($connexion->Set("IF EXIST (SELECT IDE from entreprise WHERE NomE = '".$_POST['Nom_Entreprise']."');")){
        $requête = $connexion->Set("SELECT IDE from entreprise WHERE NomE = '".$_POST['Nom_Entreprise']."' ");
        $requête2 = $connexion->Set("INSERT INTO offre (Poste, remune, Nb_place, Descr, IDE) VALUES('".$_POST['Poste']."', '".$_POST['Renumeration']."', '".$_POST['NB_Places']."', '".$_POST['Description']."', '".$requête."');");
        $requête3 = $connexion->Set("SELECT IDoffre from offre WHERE Poste = '".$_POST['Poste']."' ");
        $requête4 = $connexion->Set("SELECT IDT from types_de_promotions WHERE Nom_du_Type = '".$_POST['Promotion']."' ");
        $requête5 = $connexion->Set("INSERT INTO viser (IDoffre, IDT) VALUES('".$requête3."', '".$requête4."');");
    } else {
        echo "L'entreprise n'existe pas ! Veuillez d'abord la créer !";
    }
?>