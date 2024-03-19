<?php


class Sql
{
    private ?PDO $connexion;
    function __construct($Security_level) 
    {
        
        $user = "";
        $password = "";
        switch ($Security_level) 
        {
            case 1:
                $user = "root";
                $password = "";
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
            $this->connexion = new PDO("mysql:host=localhost;dbname=presquauchaud; port=3366", $user, $password);
            print "Has logrado PUTO !";
        }
        catch(PDOException $e){
            print "Erreur :". $e->getMessage() . "<br/>";
        }
    }
    public function GetFirstRow($sql){
        $get = $this->connexion->prepare($sql);
        $get->execute();
        return $get->fetchAll()[0];


    }
    public function Set($sql){
        $set = $this->connexion->prepare($sql);
        $set->execute();
    }
}

?>  