<?php

class DbManagerService
{
    private $dbConnection;

    function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }


    function CreateTable(TableConfigModel $tableConfig)
    {
        $sql = "CREATE TABLE " . $tableConfig->GetName() . " (";

        $sql .= ");";

        // $dbConnectio
    }
}
