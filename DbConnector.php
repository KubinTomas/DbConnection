<?php
class DbConnector
{
    private $servername;
    private $dbName;
    private $username;
    private $password;

    private $conn;

    function __construct($servername, $dbName, $username, $password)
    {
        $this->servername = $servername;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;

        $this->ConnectToDb();
    }

    function Connection()
    {
        return $this->conn;
    }

    private function ConnectToDb()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Asi to nahodou nespadlo: ";
        } catch (PDOException $e) {
            echo "Zase to spadlo: " . $e->getMessage();
        }
    }

    static function GetDefaultDbConnector()
    {
        return new DbConnector("localhost", "lovephp", "root", "");
    }

    static function GetDefaultDbConnection()
    {
        return DbConnector::GetDefaultDbConnector()->Connection();
    }
}
