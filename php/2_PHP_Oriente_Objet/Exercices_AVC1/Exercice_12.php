<?php

interface transport
{

    function accelerate();
    function slowDown();
}

class Vehicule implements transport
{
    protected $name;
    protected $color;
    protected $speed;
    protected $wheel;

    function __construct($n, $c, $s,$w)
    {
        $this->name = $n;
        $this->color = $c;
        $this->speed = $s;
        $this->wheel = $w;
    }

    // Getters/Setters

    function getName(){
        return $this->name;
    }

    function setName($n){
        $this->name = $n; 
    }

    function getColor(){
        return $this->color;
    }

    function setColor($c){
        $this->color = $c; 
    }

    function getSpeed(){
        return $this->speed;
    }

    function setSpeed($s){
        $this->speed = $s; 
    }

    function getWheel(){
        return $this->wheel;
    }

    function setWheel($w){
        $this->wheel = $w; 
    }


    function accelerate()
    {
        $this->speed++;
    }
    function slowDown()
    {
        $this->speed--;
    }
}

class Airplane implements transport
{
    protected $name;
    protected $color;
    protected $speed;
    protected $capacity;

    function __construct($n, $co, $s,$ca)
    {
        $this->name = $n;
        $this->color = $co;
        $this->speed = $s;
        $this->wheel = $ca;
    }

    function getName(){
        return $this->name;
    }

    function setName($n){
        $this->name = $n; 
    }

    function getColor(){
        return $this->color;
    }

    function setColor($co){
        $this->color = $co; 
    }

    function getSpeed(){
        return $this->speed;
    }

    function setSpeed($s){
        $this->speed = $s; 
    }

    function getCapacity(){
        return $this->capacity;
    }

    function setCapacity($ca){
        $this->capacity = $ca; 
    }


    function accelerate()
    {
        $this->speed++;
    }
    function slowDown()
    {
        $this->speed--;
    }
}

