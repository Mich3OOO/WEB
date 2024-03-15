<?php



class SqlHandler
{
    private ?mysqli $Connection;
    function __construct() 
    {
        $this->Connection = new mysqli("localhost", "root", "test" ,null, 3308);

    }
    function __destruct() 
    {
        $this->Connection->close();
    }
    public function GetFirstRow($sql)
    {
        return $this->Connection->query($sql) -> fetch_row();
    }

    public function GetArray($sql)
    {
        return $this->Connection->query($sql) -> fetch_all();
    }
    
    
}



$sql = "SELECT * FROM `utilisateur`;";


$conn->close();

echo json_encode($r->fetch_all());
?>  