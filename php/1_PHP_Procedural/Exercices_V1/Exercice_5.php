<!DOCTYPE html>
<html>
<body>


<?php

$ligne = 4;
$nbEtoile = 10;
$etoile = "*";


for($i = 0; $i < $ligne; $i++) {
    for($j = 1 ; $j < $nbEtoile; $j++) {
        $etoile .= "*";
    }
   echo $etoile."<br>";
   $etoile = "*";
}

?>

</body>
</html