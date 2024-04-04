<?php


    include "../PDO.php";
    if(!isset($_SESSION))
    {
        session_start();
    }
    $connexion = new Sql($_SESSION["role"]);
    $v=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."'),1,0);");
    var_dump($_GET);
    // var_dump($v[0]);
    foreach($_GET["Competences"] as $comp ){
        var_dump($comp);
    }
     var_dump($_GET["TypePromo"]);
    
    if($v[0]!=0){
        var_dump($v);
        $requêteIDE = $connexion->GetFirstRow("SELECT IDE from entreprise WHERE NomE = '".$_GET['Nom_Entreprise']."' ;");
        
        $requêteOffre = $connexion->Add("INSERT INTO offre (Duree,Poste, remune, Nb_place, Descr, IDE) VALUES('".$_GET['Duree']."','".$_GET['Poste']."', '".$_GET['Renumeration']."', '".$_GET['NB_Places']."', '".$_GET['Description']."', '".$requêteIDE["IDE"]."');");
        $requêteIDoffre = $connexion->GetFirstRow("SELECT IDoffre from offre WHERE Poste = '".$_GET['Poste']."'; ");
        foreach($_GET["TypePromo"] as $promo ){
            $requêteIDT = $connexion->GetFirstRow("SELECT IDT from types_promotions WHERE Nom_du_Type = '".$promo."'; ");
            $idviser=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDoffre, IDT from viser WHERE IDoffre = '".$requêteIDoffre["IDoffre"]."' AND IDT = '".$requêteIDT["IDT"]."'),1,0);");
            if($idviser[0]==0){
                $requête5 = $connexion->Set("INSERT INTO viser (IDoffre, IDT) VALUES('".$requêteIDoffre["IDoffre"]."', '".$requêteIDT["IDT"]."');");
            }
        }
        foreach($_GET["Competences"] as $comp ){
            $requêteIDComp = $connexion->GetFirstRow("SELECT IDComp from Competences WHERE Comp = '".$comp."'; ");
            $idnecessite=$connexion->GetFirstRow("SELECT IF( EXISTS (SELECT IDoffre, IDComp from necessite WHERE IDoffre = '".$requêteIDoffre["IDoffre"]."' AND IDComp = '".$requêteIDComp["IDComp"]."'),1,0);");
            if($idnecessite[0]==0){
                $requête5 = $connexion->Set("INSERT INTO necessite (IDoffre, IDComp) VALUES('".$requêteIDoffre["IDoffre"]."', '".$requêteIDComp["IDComp"]."');");
            }
        }
       

        
    } 
    else {
        echo "L'entreprise n'existe pas ! Veuillez d'abord la créer !";
    }
?>