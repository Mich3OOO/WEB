<?php

class SqlHandler
{
    
    private ?PDO $Connection;
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
        $this->Connection = new PDO("mysql:host=localhost;dbname=presquauchaud;port=3366", $user, $password);

    }

    public function SetValeur($sql)
    {
       return null;
    }

    public function GetFirstRow($sql)
    {
        $get = $this->Connection->prepare($sql);
        $get->execute();
        return $get->fetchAll()[0];
    }

    public function GetArray($sql)
    {
        $get = $this->Connection->prepare($sql);
        $get->execute();
        return $get->fetchAll();
    }

    public function Getjson($sql)
    {
        $get = $this->Connection->prepare($sql);
        $get->execute();
        return json_encode($get->fetchAll());
    }   
}


?>  