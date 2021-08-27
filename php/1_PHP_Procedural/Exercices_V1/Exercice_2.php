<!DOCTYPE html>
<html>
<body>



<?php


function volumeC($hauteur, $rayon) {
    $volume = (pow($rayon, 2) * $hauteur * pi()) / 3;
    return "Volume du cone : $volume mètre cube";
}

echo volumeC(10, 29);

?>


</body>
</html