<?php

interface vehicle
{

    function accelerate();
    function slowDown();
}

class Car implements vehicle
{

    function accelerate()
    {
        $this->speed++;
    }
    function slowDown()
    {
        $this->speed--;
    }
}

class Moto implements vehicle
{

    function accelerate()
    {
        $this->speed++;
    }
    function slowDown()
    {
        $this->speed--;
    }
}
