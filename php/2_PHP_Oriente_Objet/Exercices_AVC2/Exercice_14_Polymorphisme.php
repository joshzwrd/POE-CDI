<?php 


interface Forfait{

function calculRemise();

}


class Mobile implements Forfait {

    public $ligne;
    public $prix;
    public $consomation;

    function __construct($l,$p,$c)
    {
        $this->ligne = $l;
        $this->prix = $p;
        $this->consomation = $c;
    }
    
    // Getters/Setters 

    function getLigne(){
        return $this->ligne;
    }

    function setLigne($l){
        $this->ligne = $l;
    }

    function getPrix(){
        return $this->prix;
    }

    function setPrix($p){
        $this->prix = $p;

    }

    function getConsomation(){
        return $this->consomation;
    }

    function setConsomation($c){
        $this->consomation = $c;
    }



    function calculRemise(){
        
        
        $r = $this->prix * $this->consomation ;
        return $r;

    }
}


Class Fixe implements Forfait {

    public $ligne;
    public $prix;

    function __construct($l,$p)
    {
        $this->ligne = $l;
        $this->prix = $p;
    }
    
    // Getters/Setters 

    function getLigne(){
        return $this->ligne;
    }

    function setLigne($l){
        $this->ligne = $l;
    }

    function getPrix(){
        return $this->prix;
    }

    function setPrix($p){
        $this->prix = $p;

    }

    function calculRemise(){
        
        return $this->prix;

    }

}

function resultat(Forfait $forfait)/*: string */ {

    if ($forfait->calculRemise() >= 100) {
        return "La ligne N°: <b>" . $forfait->ligne . "</b> a une remise de <b>" . $forfait->calculRemise() * 0.1 . "</b> $.";
    }else{

        return "La ligne N°: <b>" . $forfait->ligne . "</b> n'a pas le droit à une remise.";
    }

}
    
    
$mobile = new Mobile(111,10,5);

echo resultat($mobile);

echo "<br><br>";

$fixe = new Fixe(222,200);

echo resultat($fixe);