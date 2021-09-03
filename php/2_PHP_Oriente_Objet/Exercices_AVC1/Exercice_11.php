<?php

class CompteBancaire
{

    protected $devise;
    protected $credit;
    protected $titulaire;

    function __construct($d, $c, $t)
    {
        $this->devise = $d;
        $this->credit = $c;
        $this->titulaire = $t;
    }

    // getters/setters

    function getDevise()
    {
        return $this->devise;
    }

    function setDevise($d)
    {
        $this->devise = $d;
    }


    function getCredit()
    {
        return $this->credit;
    }

    function setCredit($c)
    {
        $this->credit = $c;
    }


    function getTitulaire()
    {
        return $this->titulaire;
    }

    function setTitulaire($t)
    {
        $this->titulaire = $t;
    }
    
    function faireUnCredit($s)
    {   
        $solde = $this->credit += $s;
        return $solde;
    }

    function beneficiaire()
    {
        echo "Bonjour " . $this->titulaire 
        . " votre solde est de <b>" 
        . $this->credit 
        . "</b> " 
        . $this->devise; 
    }
    
}

$objCompteBancaire = new CompteBancaire("$",50,"Jakarta");
$objCompteBancaire->faireUnCredit(200);
echo $objCompteBancaire->beneficiaire();
echo '<br><br>';


class CompteEpagne extends CompteBancaire {

    private $tauxInteret;

    function __construct($tI,$d,$c,$t)
    {
        $this->tauxInteret = $tI;
        parent::__construct($d, $c, $t);
    }

    function getTauxInteret(){
        return $this->tauxInteret;
    }

    function setTauxInteret($tI){
        $this->tauxInteret = $tI;
    }

    function beneficiaireEpargne()
    {
        echo parent::beneficiaire() . " et votre taux d'interet epagne est de <b>". $this->tauxInteret . "</b> %"
        ;
        
    }
}

$objCompteEpargne = new CompteEpagne(2,"$",50,"Ina");
echo $objCompteEpargne->beneficiaireEpargne();
echo '<br><br>';