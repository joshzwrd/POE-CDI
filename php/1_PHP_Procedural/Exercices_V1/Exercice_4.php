<!DOCTYPE html>
<html>

<body>


    <?php

    function multiple($nombre)
    {
        if ($nombre % 5 && $nombre % 3) {
            return "il est un multiple de 3 et 5\n";
            // echo "il est un multiple de 3 et 5\n";
        } else {
            return "il n'est pas un multiple de 3 et 5\n";
            // echo "il n'est pas un multiple de 3 et 5\n";
        }
    }

    echo multiple(4) . "<br>";
    echo multiple(15);
    // multiple(4) . "<br>";
    // multiple(15);


    ?>


</body>

</html