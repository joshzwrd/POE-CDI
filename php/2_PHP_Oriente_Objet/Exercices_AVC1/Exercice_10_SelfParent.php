<?php

class Salarie{
    
    protected $numero;
    protected $dateEnregistrement;
    const HEURE_TRAVAIL = 35 ;
    public static $objCrees;

    function __construct($n)
    {
        $this->numero = $n;
        $this->dateEnregistrement = new DateTime();
        self::$objCrees++;
    }

    function getNumero(){
        return '<b>' . $this->numero. '</b>';
    }
    function setNumero($n){
        $this->numero = $n;
    }

    function getDateEnregistrement(){
        return '<b>' . ($this->dateEnregistrement)->format('y-m-d'). '</b>';
    }
    function setDateEnregistrement($dateE){
        $this->dateEnregistrement = $dateE;
    }

    function getSalaire($t){

        $taux = $t/ self::HEURE_TRAVAIL;
        return $taux;

    }

}

class Etudiant extends Salarie{
    private $ine;
    const HEURE_TRAVAIL = 20 ;
    
    function __construct($i,$n)
    {
        $this->ine = $i;
        parent::__construct($n);
    }

    function getIne(){
        return $this->ine;
    }

    function setIne($i){
        $this->ine = $i;
    }

    function heureTravail(){
        echo "Le salarié travail <b>". parent::HEURE_TRAVAIL . "</b> heures <br>";
        echo "L'étudiant travail <b>" . self::HEURE_TRAVAIL . "</b> heures" ;
    }
}


$objSalarie1 = new Salarie(55);
echo "Le Salarié N°" .$objSalarie1->getNumero(). " est inscrit depuis le ". $objSalarie1->getDateEnregistrement();
echo "<br><br>";

$objSalarie2 = new Salarie(66);
echo "Le Salarié N°" .$objSalarie2->getNumero(). " est inscrit depuis le ". $objSalarie2->getDateEnregistrement();
echo "<br><br>";

echo "Nombres d'objet : " . Salarie::$objCrees;
echo "<br><br>";

$objEtudiant = new Etudiant("111",44);
echo "L'ine de l'étudiant : " .$objEtudiant->getIne();
echo "<br><br>";

echo $objEtudiant->heureTravail();