<?php


class PDO
{
    
    function __construct($Security_level) 
    {

        $user = "";
        $password = "";
        switch ($Security_level) 
        {
            case 1:
                $user = "root";
                $password = "root";
                break;
            
            case 2:
                $user = "root";
                $password = "";
                break;

            case 3:
                $user = "root";
                $password = "";
                break;
            
            default:
                $user = "root";
                $password = "";
                break;
        }
        try{
            $connexion = new PDO("mysql:host=localhost;dbname=projetweb", $user, $password);
            print "Has logrado PUTO !";
        }
        catch(PDOException $e){
            print "Erreur :". $e->getMessage() . "<br/>";
        }

        public function GetFirstRow($sql)
    {
        return $connexion->query($sql) -> fetch_row();
    }
    }
}
?>  