<?php

class Voiture
{
    var $couleur;
    var $puissance;
    var $vitesse;

    function __construct($couleur, $puissance, $vitesse)
    {
        $this->$couleur = $couleur;
        $this->puissance = $puissance;
        $this->vitesse = $vitesse;
    }
    function accelerer()
    {
        $this->vitesse++;
        return $this->vitesse;
    }

    function ralentir()
    {
        $this->vitesse--;
        return $this->vitesse ;
    }
}

$obj = new Voiture('Noir Mat','BMW', 100);

echo "Lorsque j'accélere la vitesse est à " . $obj->accelerer();
echo '<br>';
echo "Lorsque je ralenti la vitesse est à " . $obj->ralentir();
