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
            $this->connexion = new PDO("mysql:host=localhost;dbname=presquauchaud; port=3366", $user, $password);        }
        catch(PDOException $e){
            print "Erreur :". $e->getMessage() . "<br/>";
        }
    }
    public function GetFirstRow($sql){
        $get = $this->connexion->prepare($sql);
        $get->execute();
        return $get->fetchAll()[0];
        }

    public function GetArray($sql)
    {
        $get = $this->connexion->prepare($sql);
        $get->execute();
        return $get->fetchAll();
    }

    public function Getjson($sql)
    {
        $get = $this->connexion->prepare($sql);
        $get->execute();
        return json_encode($get->fetchAll());
    }   
    public function Set($sql){
        $set = $this->connexion->prepare($sql);
        return $set->execute();
    }
}
    

?>  