<?php


class MoyenDeLocomotion
{

    protected $vitesse;
    protected $nbPassage;

    function __construct($v, $nbP)
    {
        $this->vitesse = $v;
        $this->nbPassage = $nbP;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }
    public function setVitesse($v)
    {
        $this->vitesse = $v;
    }
    public function getNbPassage()
    {
        return $this->nbPassage;
    }
    public function setNbPassage($nbP)
    {
        $this->nbPassage = $nbP;
    }
}

class Moto extends MoyenDeLocomotion
{

    private $electrique;

    function __construct($v,$nbP,$e)
    {
        MoyenDeLocomotion::__construct($v,$nbP);
        $this->electrique = $e;
    }

    public function getElectrique()
    {
        return $this->electrique;
    }
    public function setElectrique($e)
    {
        $this->electrique= $e;
    }
}




class Voiture extends MoyenDeLocomotion
{

    private $professionnel;

    function __construct($v,$nbP,$p)
    {
        MoyenDeLocomotion::__construct($v,$nbP);
        $this->professionnel = $p;
    }

    public function getProfessionnel()
    {
        return $this->professionnel;
    }
    public function setProfessionnel($p)
    {
        $this->professionnel = $p;
    }
}

$objMoto = new Moto(90, 3 ,false);
echo "La moto a une vitesse de " . $objMoto-> getVitesse() . " km";
echo "<br>";
$objVoiture = new Voiture(130, 2 ,true);
echo "La voiture a une vitesse de " .  $objVoiture-> getVitesse() . " km";
