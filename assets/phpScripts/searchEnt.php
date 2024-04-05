
<?php
include './PDO.php';
include './addfiltre.php';
if(!isset($_SESSION))
    {
        session_start();
    }
$con = new Sql($_SESSION["role"]);

if(isset($_GET["Ville"]) and isset($_GET["reg"]) and isset($_GET["secteur"]))
{
    

    $setand = false;
    $sql = "SELECT entreprise.IDE,entreprise.NomE,entreprise.Site,ROUND(AVG(NoteU),1) as avg FROM  entreprise INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN reg ON Ville.ID_reg = reg.ID_reg LEFT JOIN note on note.IDE = entreprise.IDE ";
    if($_GET["Ville"][0] != "" or $_GET["reg"][0] != "" or $_GET["secteur"][0] != "")
    {
        $sql = $sql . " WHERE" ;
        if($_GET["Ville"][0] != "")
        {
            $sql = $sql . addFiltre("Ville", $_GET["Ville"],$setand);
            $setand = true;
        }

        if($_GET["reg"][0] != "")
        {
            $sql = $sql . addFiltre("reg", $_GET["reg"],$setand);
            $setand = true;
        }
        if($_GET["secteur"][0] != "")
        {
            $sql = $sql . addFiltre("secteur_activite.secteur_Act", $_GET["secteur"],$setand);
            $setand = true;
        }
    }
    $sql = $sql . " GROUP by entreprise.IDE; ;";

    echo $con->Getjson($sql);
    //echo $sql;

}
elseif(isset($_GET["ID"]))
{

    echo $con->Getjson("SELECT *,entreprise.IDE as IDE,ROUND(AVG(note.NoteU),1) as avg,n1.NoteU as MyNote FROM  entreprise INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN reg ON Ville.ID_reg = reg.ID_reg LEFT JOIN note on note.IDE = entreprise.IDE LEFT join (SELECT NoteU,IDE from note WHERE IDE = " . $_GET["ID"] . "  and IDu = " . $_SESSION["IDu"] . " ) as n1 on n1.IDE = entreprise.IDE  where entreprise.IDE = " . $_GET["ID"] . "  GROUP by entreprise.IDE;");
    //echo SELECT *,ROUND(AVG(note.NoteU),1) as avg,n1.NoteU as MyNote FROM  entreprise INNER JOIN secteur_activite ON Entreprise.IdSec = secteur_activite.IdSec INNER JOIN adresse ON Entreprise.ID_adresse = adresse.ID_adresse INNER JOIN Ville ON adresse.idv = Ville.idv INNER JOIN reg ON Ville.ID_reg = reg.ID_reg LEFT JOIN note on note.IDE = entreprise.IDE LEFT join (SELECT NoteU,IDE from note WHERE IDE = " . $_GET["ID"] . "  and IDu = " . $_SESSION["IDu"] . " ) as n1 on n1.IDE = entreprise.IDE  where entreprise.IDE = " . $_GET["ID"] . "  GROUP by entreprise.IDE;
}
else
{
    echo "[]";
}


?>