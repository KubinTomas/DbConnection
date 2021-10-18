<?php

class Car
{
    // auto ma kapacitu nadrze
    // auto ma aktualni stav nadrze
    // ma 10l z 100l
    // auto ma spotrebu.. - 5l/na 100km treba
    // auto ma sanci na to ze potka benzinku 
    // auto ma metodu na pohyb
    // auto ma metodu na dotankovani

    private $tankCapacity;
    private $fuel;
    private $consumption;
    private $color;


    function __construct($tankCapacity, $fuel, $consumption)
    {
        $this->tankCapacity = $tankCapacity;
        $this->fuel = $fuel;
        $this->consumption = $consumption;

        $this->SetColor($fuel);
    }

    function SetColor($fuel)
    {
        $this->color = $fuel > 30 ? "PINK" : "PURPLE";
    }

    function GetFuelConsumtionOnDistance($distance)
    {
        return $this->consumption * $distance / 100;
    }

    function HaveEnoughFuel($distance)
    {
        return $this->GetFuelConsumtionOnDistance($distance) <= $this->fuel;
    }

    function RefillFullCapacity()
    {
        $this->fuel = $this->tankCapacity;

        $fuel = 2;
        $x = $fuel;
    }
}
