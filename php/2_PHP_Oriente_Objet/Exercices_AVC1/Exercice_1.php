<!-- 
    - Créer une classe User contenant un attribut (name) et un constructeur.
    - Créer une méthode (sayHello()) permettant d’afficher une message, concaténant avec l’attribut name.
    - Instancier la classe et tester la méthode sayHello() 
-->

<?php 

class User
{
    var $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function sayHello(){
        echo "Bonjour je m'appelle " . $this->name ;
    }
}

$obj = new User('Josh');
echo $obj->sayHello();