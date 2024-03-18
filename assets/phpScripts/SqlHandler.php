<?php

function OpenConnection() //Ouvre la connexion à la BDD en se servant d'un compte, données $_SESSION?
    {
        $serverName = /*"tcp:myserver.database.windows.net,1433"*/;
        $connectionOptions = array("Database"=>"PROJETWEB",
            "Uid"=>"IDu", "PWD"=>"MdpU");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));

        return $conn;
    }

function ReadData() //SELECT
    {
        try
        {
            $conn = OpenConnection();
            $tsql = "SELECT * FROM Utilisateur";
            $query = sqlsrv_query($conn, $tsql);
            if ($query == FALSE)
                die(FormatErrors(sqlsrv_errors()));
            
                $productCount = 0;//?
            while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))//?
            {
                echo($row['NomU']);
                echo("<br/>");
                $productCount++;
            }
            sqlsrv_free_stmt($query);//?
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
    }

function InsertData() // INSERT AVEC PROTECTION D'INJECTION SQL ASKIP
    {
        try
        {
            $conn = OpenConnection();
            $tsql = "INSERT INTO Utilisateur (MdpU, NomU,PrenomU, Date_NaisU, MailU, role) VALUES ('MDP', 'J', 'arod', '2000-12-10', 'ja@example.com', 'Etudiant');";
            $insertReview = sqlsrv_query($conn, $tsql);
            if($insertReview == FALSE)
                die(FormatErrors( sqlsrv_errors()));
            echo "ID de l'ajout est :";
            while($row = sqlsrv_fetch_array($insertReview, SQLSRV_FETCH_ASSOC))
            {
                echo($row['IDu']);
            }
            sqlsrv_free_stmt($insertReview);
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
    }

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

                //GET valeurs de la page pour ensuite créer les users
                
                $sql_query = 'CREATE USER testadmin IDENTIFIED BY "MDP";';
                $sql_query2 = 'GRANT ALL ON PROJETWEB.* TO testadmin WITH GRANT OPTION;';
                $sql_query3 = "INSERT INTO Utilisateur (IDu, MdpU, NomU,PrenomU, Date_NaisU, MailU, role) VALUES ('16', 'MDP', 'J', 'arod', '2000-12-10', 'ja@example.com', 'Etudiant')";
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
        $this->Connection = new mysqli("localhost", $User,$PSW, "test", 3308);

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

    public function Getjson($sql)
    {
        return $this->Connection->query($sql) -> fetch_all();# json_encoder
    }   
}


?>  