<?php

class StringPlus
{
    var $str;
    var $length;

    function __construct($str)
    {
        $this->str = $str;
        $this->length = strLen($str);

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

    function strLen()
    {
        return $this->length . '<br>';
    }
    function upper()
    {
        return strtoupper($this->str) . '<br>';
    }
    function lower()
    {
        return strtolower($this->str) . '<br>';
    }
}

$obj = new StringPlus('Bonjour, COMMENT tU vAs ?');
echo "Longueur : " . $obj->strLen();
echo "Minuscules : " . $obj->upper();
echo "Majuscules : " . $obj->lower();
