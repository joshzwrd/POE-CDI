<?php

class Addition_class {

    static function addition($a, $b, $c){
        $somme = $a + $b + $c;
        return $somme;
    }
}

class Moyenne_class extends Addition_class{

    static function moyenne($a, $b, $c){
        
        $somme = Addition_class::addition($a, $b, $c);

        $moyenne = $somme / 3;

        return $moyenne;

    }
}

echo Moyenne_class::moyenne(4,6,9);