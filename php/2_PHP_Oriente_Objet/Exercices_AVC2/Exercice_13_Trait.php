<?php

trait Trait1
{
    public function sayHello()
    {
        echo 'Hello, je m\'appelle Joël !';
    }
}
trait Trait2
{
    public function __toString()
    {
        echo 'Futur Chef de projet Informatique';
    }
}

class MyTrait
{
    use Trait1;
    use Trait2;
}

$obj = new MyTrait();
echo $obj->sayHello();
echo "<br><br>";
echo $obj->__toString();
echo "<br><br>";
echo "<br><br>";



trait Tspeak 
{
    public function speak()
    {
        echo 'Je suis un trait';
    }
}

class Mere {

    public function speak()
    {
        echo 'Je suis une classe';
    }
}

$objMere = new Mere();
echo $objMere->speak();
echo "<br><br>";

class Fille extends Mere
{
    
    use Tspeak;
    function __toString()
    {
       echo parent::speak(); 
    }
    
}

echo "<b>Dans la classe fille : </b>";
echo "<br><br>";
$objFille = new Fille();
echo $objFille->speak();
echo "<br><br>";
echo $objFille->__toString();


