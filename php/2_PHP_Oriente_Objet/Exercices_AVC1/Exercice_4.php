<?php

class StringPlus
{
    var $str;

    function __construct($str)
    {
        $this->str = $str;
    }

    function toBold()
    {
        return '<b>' . $this->str . '</b><br>';
    }
    function toItalic()
    {
        return '<i>' . $this->str . '</i><br>';
    }
    function toUnderline()
    {
        return '<u>' . $this->str . '</u><br>';
    }
}

$obj = new StringPlus('Bonjour');
echo "Gras : " . $obj->toBold();
echo "Italique : " . $obj->toItalic();
echo "Souligné : " . $obj->toUnderline();
