<?php

class SqlHandler
{
    
    private ?mysqli $Connection;
    function __construct($Security_level) 
    {

        $User = "";
        $PSW = "";
        switch ($Security_level) 
        {
            case 1:
                $User = "root";
                $PSW = "root";
                break;
            
            case 2:
                $User = "root";
                $PSW = "";
                break;

            case 3:
                $User = "root";
                $PSW = "";
                break;
            
            default:
                $User = "root";
                $PSW = "";
                break;
        }
        $this->Connection = new mysqli("localhost", $User,$PSW, "PROJETWEB", 3308);

    }
    function __destruct() 
    {
        $this->Connection->close();
    }

    public function SetValeur($sql)
    {
        try 
        {
            $this->connection->query($sql);
            echo 'DONE PUTO!';
        }
        catch(Exception($e)){
            echo 'ERROR PUTO!';
        }
    }

    public function GetFirstRow($sql)
    {
        return $this->Connection->query($sql) -> fetch_row();
    }

    public function GetArray($sql)
    {
        return $this->Connection->query($sql) -> fetch_all();
    }

    public function Getjson($sql)
    {
        return $this->Connection->query($sql) -> fetch_all();# json_encoder
    }   
}


?>  