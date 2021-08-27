<!DOCTYPE html>
<html>
<body>

<style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
    </style>

<table>
        <tr>
            <th>INE</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Moyenne</th>
            <th>Mention</th>
        </tr>

<?php

$personnes = array(
    [
        "ine" => 1230,
        "nom" => "ALLON",
        "prenom" => "LEVY",
        "specialite" => "TIN",
        "moyenne" => 13,
        "mention" => "Bien"
    ],
    [
        "ine" => 1231,
        "nom" => "BACARD",
        "prenom" => "HUGO",
        "specialite" => "CDI",
        "moyenne" => 12,
        "mention" => "A Bien"
    ],
    [
        "ine" => 1232,
        "nom" => "BAKER",
        "prenom" => "MATTHEW",
        "specialite" => "Informatique Pour les Sciences",
        "moyenne" => 17,
        "mention" => "Très Bien"
    ]
);

// foreach($personnes as $v){
//     echo "<tr>";
//     echo "<td>" . $v["ine"] . "</td>";
//     echo "<td>" . $v["nom"] . "</td>";
//     echo "<td>" . $v["prenom"] . "</td>";
//     echo "<td>" . $v["specialite"] . "</td>";
//     echo "<td>" . $v["moyenne"] . "</td>";
//     echo "<td>" . $v["mention"] . "</td>";
//     echo "</tr>";
// };

foreach($personnes as $personne) {
    echo "<tr>";
    foreach($personne as $categorie) {
        echo "<td>$categorie</td>";
    }
    echo "</tr>";
};

?>
</table>

</body>
</html