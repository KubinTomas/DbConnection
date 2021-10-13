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

        for ($i = 0; $i < count($tableConfig->GetColumns()); $i++) {
            $column =  $tableConfig->GetColumns()[$i];

            $sql .= $column->GetName() . " " . $column->GetDataType();

            if ($i != count($tableConfig->GetColumns()) - 1) {
                $sql .= ",";
            }

        }

        $sql .= ");";

        
    }
}
