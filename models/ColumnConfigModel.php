<?php

class ColumnnConfigModel
{
    private $name;
    private $dataType;

    function __construct($name, $dataType)
    {
        $this->name = $name;
        $this->dataType = $dataType;
    }

    function GetName()
    {
        return $this->name;
    }

    function GetDataType()
    {
        return $this->dataType;
    }
}
