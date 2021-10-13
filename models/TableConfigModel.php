<?php

class TableConfigModel
{
    private $name;
    private $columns;

    function __construct($name, $columns)
    {
        $this->name = $name;
        $this->columns = $columns;
    }

    function GetName()
    {
        return $this->name;
    }

    function GetColumns()
    {
        return $this->columns;
    }
}
