<!DOCTYPE html>
<html>
<body>


<?php

$technologies =
    [
        "Langages" => ["PHP", "JAVA", "PYTHON"],
        "Framework" => ["SYMFONY", "SPRING", "DJANGO"],
        "Cms" => ["WORDPRESS", "MAGNOLIA", "MEZZANINE"]
    ];



foreach ($technologies as $categorie => $technologie) {
    echo "<b>$categorie</b> : $technologie[0], $technologie[1], $technologie[2]<br>";
}


?>

</body>
</html