<?php

class MathAnaResult
{
    public $average;
    public $max;
    public $min;

    function __construct($average, $min, $max)
    {
        $this->average = $average;
        $this->min = $min;
        $this->max = $max;
    }
}
