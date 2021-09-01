<?php

// echo "Boucle for : <br>";

// for ($i=0 ; $i<=30 ; $i += 10){
//     echo "$i <br>";
// }

// /////

// echo "Boucle while : <br>";

// $i = 0;
// while($i <= 30) {
//     echo "$i <br>";
//     $i = $i + 10;
// }



// $a = 4;
// echo $a . ' = quatre' . "$a toto";

// $i++; <=> $i = $i + 1; <=> $i += 1;
// $i = $i + 2; <=> $i += 2;

// $i = 3;

// $i = $i + 4;


$passeSanitaire = false;
$masque = true;

if($passeSanitaire == true) {
    echo "Passe sanitaire : OK <br>";
} else {
    echo "Passe sanitaire : NON <br>";
}

// $passeSanitaire ? echo "Passe sanitaire : OK <br>" : echo "Passe sanitaire : NON <br>";

if($masque == true) {
    echo "Masque : OK <br>";
} else {
    echo "Masque : NON <br>";
}

echo "<br><br><br>";

echo "Vous pouvez rentrer uniquement avec votre passe sanitaire et votre masque ! <br>";
if($passeSanitaire == true && $masque == true) {
    echo "Bienvenue, vous avez votre passe sanitaire et votre masque<br>";
} else {
    echo "Ca va pas être possible ! <br>";
}

echo "<br><br><br>";

echo "Vous pouvez rentrer uniquement avec votre masque ! <br>";
if($masque == true) {
    echo "Bienvenue, vous avez avec votre masque <br>";
} else {
    echo "Ca va pas être possible ! <br>";
}

echo "<br><br><br>";

echo "Vous pouvez rentrer uniquement avec votre passe sanitaire ! <br>";
if($passeSanitaire == true) {
    echo "Bienvenue, vous avez avec votre masque <br>";
} else {
    echo "Ca va pas être possible ! <br>";
}

echo "<br><br><br>";

echo "Vous pouvez rentrer avec soit votre passe sanitaire ou votre masque ! <br>";
if($passeSanitaire == true || $masque == true) {
    echo "Bienvenue, vous avez l'un ou l'autre<br>";
} else {
    echo "Ca va pas être possible ! <br>";
}