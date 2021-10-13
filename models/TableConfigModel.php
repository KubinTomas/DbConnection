<?php

class TableConfigModel{
    private $columnName;
    private $dataType;

    function __construct($columnName, $dataType)
    {
        $this->columnName = $columnName;
        $this->dataType = $dataType;
    }
}