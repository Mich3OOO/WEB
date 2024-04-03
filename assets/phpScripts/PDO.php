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
        return $get->fetchAll(PDO::FETCH_ASSOC);
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
    public function Add($sql)
    {
        try {
            $insert = $this->connexion->exec($sql);
            return ($insert);
            } catch (Exception $e) {
                echo "Problème de connexion à la base de donnée     ...";
                die();
            }

    }
    public function Delete($sql)
    {
        try {
            $delte = $this->connexion->exec($sql);
            return ($delete);
            } catch (Exception $e) {
                echo "Problème de connexion à la base de donnée     ...". $e;
                die();
            }

    }
    public function Update($sql)
    {
        try {
            $update = $this->connexion->exec($sql);
            return ($update);
            } catch (Exception $e) {
                echo "Problème de connexion à la base de donnée     ...".$e;
                die();
            }

    }
}
    

?>  