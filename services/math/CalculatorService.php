<?php

class CalculatorService
{
    private $age;

    function __construct($age)
    {
        $this->age = $age;
    }

    function GetSenilita()
    {
        return $this->age * 1.25;
    }

    function Sum($a, $b)
    {
        return ($a + $b) * $this->GetSenilita();
    }
}
