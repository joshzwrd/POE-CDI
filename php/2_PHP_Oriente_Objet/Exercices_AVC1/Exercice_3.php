<?php 

class Calculatrice
{
    var $nb_1;
    var $nb_2;

    function __construct($nb_1,$nb_2)
    {
        $this->nb_1 = $nb_1;
        $this->nb_2 = $nb_2;
    }
    function addition(){

        echo $this->nb_1. " + " .$this->nb_2 . " = ";
        echo $this->nb_1 + $this->nb_2 . '<br>';
    }
    
    function soustraction(){
        
        echo $this->nb_1. " - " .$this->nb_2 . " = ";
        echo $this->nb_1 - $this->nb_2 . '<br>' ;
    }
    
    function multiplication(){
        
        echo $this->nb_1. " x " .$this->nb_2 . " = ";
        echo $this->nb_1 * $this->nb_2 . '<br>';
    }
    
    function division(){
        echo $this->nb_1. " : " .$this->nb_2 . " = ";
        echo $this->nb_1 / $this->nb_2 . '<br>' ;
    }
}

$obj = new Calculatrice('2','10');
echo $obj->addition();
echo $obj->soustraction();
echo $obj->multiplication();
echo $obj->division();