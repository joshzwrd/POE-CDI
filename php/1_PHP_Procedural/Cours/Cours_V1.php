<!DOCTYPE html>
<html>


<!-- Premier code en PHP -->

<?php
echo "Hello World!";


// Ceci est un commentaire mono-ligne

# Ceci est aussi un commentaire mono-ligne

/*
Ceci est un bloc de commentaire
qui s’étend sur plusieurs
lignes
*/

# VARIABLES :

$name = 'Luka';
$avg = 19.11;
$max = 20;
$admission = true;

# La concaténation


$name = 'Luka';
$age = 23;
echo "Hello, I am $name and I'm $age years old ^^";
echo "<br />";
echo "Hello, I am " . $name . " and I'm " . $age . " years old ^^"


# Les conditions


// VARIABLES :



$name = 'Luka';
$avg = 19.11;
$max = 20;
$admission = true;

// CONDITIONS :

if ($admission == true) {
echo "Congratulations $name ! You have a general average of $avg/$max ^^";
} else if ($admission == false) {
echo "Sorry $name ! You are not admitted !";
}

# Les ternaires 

// VARIABLES :

$name = 'Luka';
$avg = 19.11;
$max = 20;
$admission = true;

// TERNARY CONDITIONS :
$msg = $admission == true ? "Congratulations" : "You are not admitted !";
echo $msg;

# Les conditions

// VARIABLES :

$name = 'Luka';
$avg = 19.11;
$max = 20;
$admission = true;

// CONDITIONS :

switch ($admission) {
case true:
echo "Congratulations $name ! You have a general average of $avg/$max ^^";
break;
case false:
echo "Sorry $name ! You are not admitted !";
break;
}

# Les tableaux 

# TABLEAUX & BOUCLES:

$indexedArray = ['Luka', 19.11, 20, true];
for($i = 0; $i <= 3; $i++){
echo $indexedArray[$i] . "\n";
}
$associativeArray = array('name' => 'Luka', 'avg' => 19.11, 'max' => 20, 'admission' => true);
foreach($associativeArray as $key => $value){
echo $key . " : " . $value . "\n";
}

# Les boucles (for)

for ($x = 0; $x <= 5; $x++){
    echo "Le numéro est : $x <br>";
    }

# Les boucles (while)

echo "Tant que (condition) fait … :";
$x = 1;
while($x <= 5){
echo "Le numéro est : $x <br>";
$x++;
}

# Les boucles/Tableaux
    
# TABLEAUX & BOUCLES:

$indexedArray = ['Luka', 19.11, 20, true];
for($i = 0; $i <= 3; $i++){
echo $indexedArray[$i] . "\n";
}
$associativeArray = array('name' => 'Luka', 'avg' => 19.11, 'max' => 20, 'admission' => true);
foreach($associativeArray as $key => $value){
echo $key . " : " . $value . "\n";
}

# Sensibilité à la casse

ECHO "Bonjour!<br>";
echo "Bonjour!<br>";
EcHo "Bonjour!<br>";

/*
Les classes, les fonctions et les fonctions définies par l'utilisateur ne sont PAS sensibles à la
casse. Toutefois; tous les noms de variables sont sensibles à la casse.
*/

# Les fonctions 

# FONCTIONS :

function sampleFunction()
{
echo "Hello ! I am Luka, and I am 23 years old ^^ \n";
}
sampleFunction('Luka', 23);
function prmFunction($name, $age)
{
return "Hello ! I am " . $name . ", and I am " . $age . " years old ^^ \n";
}
echo prmFunction('Luka', 23);

# Les fonctions pédéfinies 

$array = ['item-1' => 100, 'item-2' => 200];
echo $array['item-1'] . "<br />";
print_r($array);
var_dump($array);
echo array_sum($array) . "<br />";
echo count($array) . "<br />";
echo in_array(100, $array) . "<br />";
echo array_key_exists('item-2', $array) . "<br />";
echo rand(1,10) . "<br />";
echo array_rand($array) . "<br />"

?>

</html>