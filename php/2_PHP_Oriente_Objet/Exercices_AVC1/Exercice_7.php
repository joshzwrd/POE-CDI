<?php

class Form
{

    /* Méthodes statiques à créer */

    static function formStart($method)
    {
        echo "<form border=\"$method\"> ";
    }

    static function input($type, $name)
    {
        echo "<input type=\"$type\" name=\"$name\">";
    }
    

    static function select($options, $name)
    {
        echo "<select name=\"$name\">";
        foreach ($options as $option) {
            echo "<option>" . $option . "</option>";
        };
        echo "</select>";
    }
    
    static function textarea($name)
    {
        echo "<textarea name=\"$name\"></textarea>";
    }

    static function formEnd()
    {
        echo "</form>";
    }
}

Form::formStart("post");

Form::input("text", "name");
echo "<br><br>";

Form::input("submit", "submit");
echo "<br><br>";

Form::select(
    ["Samedi", "Dimanche"],
    "jours"
);
echo "<br><br>";

Form::textarea("msg");
Form::formEnd();
