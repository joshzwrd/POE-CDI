<!DOCTYPE html>
<html>
<body>
<!-- <style>
    span {
        color:green;
        font-weight: bold;
    }
</style> -->

<?php

// function personne($name, $age)
// {
// return "<span style=\"color:green; font-weight:span bold;\"> Bonjour, je suis " . $name . " et j'ai " . $age . " ans <br></span>";
// }
// echo personne('Josh', 24);

// 



function personAge($prenom, $age) {
    return "<span style=\"color:green; font-weight: bold;\">" . $prenom . " a " . $age . " ans. <br></span>";
    // return "<span>" . $prenom . " a " . $age . " ans. <br></span>";
}

echo personAge("Mohammed", 29);

?>


</body>
</html