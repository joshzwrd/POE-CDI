<?php

$xml = simplexml_load_file("iut.xml") or die("Error: Cannot create object");

echo "<table>";

foreach ($xml->etudiant as $v) {
    echo "<tr><th>Nom de l'etudiant : " . $v['nom'] . "</th><th>ID de l'etudiant: " . $v['id'] . "</th></tr>";

    foreach ($v->uv as $v) {
        echo "<tr><td> Nom de l'UV : </td><td>", $v->nom, "</td></tr>";
        echo "<tr><td> Durée de l'UV : </td><td>", $v->duree, "</td></tr>";
        echo "<tr><td> Note pour l'UV : </td><td>", $v->note, "</td></tr>";
        
    }

}

echo "</table>";
?>

<html>
<style>
    table{
        border: 1px solid;
        width: 80%;
        margin: 10%;
        padding: 5px;
    }
    table td, table th, table tr{
        border: 1px solid;
    }
</style>
</html>