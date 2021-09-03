<?php

class Table
{

    /* Méthodes statiques à créer */

    static function tableStart($border, $witdh)
    {
        echo "<table border=\"$border\" width=\"$witdh\"> ";
    }

    static function tableHeader($hd)
    {
        echo "<tr>";
        foreach ($hd as $value) {
            echo "<th>" . $value . "</th>";
        };
    }

    static function rowCols($cd)
    {
        echo "<tr>";
        foreach ($cd as $value) {
            echo "<td>" . $value . "</td>";
        };
    }

    static function tableEnd()
    {
        echo "</table>";
    }
}

Table::tableStart(1, 50); // (border,width)
Table::tableHeader(["Id", "Name", "Email"]);
Table::rowCols(["1", "Elbaz", "elbaz@mail.com"]);
Table::rowCols(["2", "Dode", "dode@mail.fr"]);
Table::tableEnd();
