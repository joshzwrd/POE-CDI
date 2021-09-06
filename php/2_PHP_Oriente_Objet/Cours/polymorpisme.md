# Le Polymorpisme

Le polymorphisme, du grec ancien (plusieurs forme), est le concept
consistant à fournir une interface unique pour différents types
d’entrées. Par exemple, des opérations telles que la multiplication
peuvent être des étendues de scalaires aux vecteurs ou aux matrices,
l'addition, des scalaires aux fonctions ou aux chaînes de caractères,
etc.


### Exemple 1 : 

```php

<?php
class Rectangle {
    private float $height, $width;

    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }
    public function getSurface(): float {
        return $this->height * $this->width;
    }
}

class Circle {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    public function getSurface(): float {
        return pow($this->radius, 2) * pi();
    }
}

function getPrice(Rectangle $rectangle): float {
    return $rectangle->getSurface() * 5;
}

$rectangle = new Rectangle(12, 7);
echo getPrice($rectangle);

# NB : Il faut prévoir une autre méthode, si il y a besoin de calculer le prix d’un Cercle.
```

Afin de pouvoir exécuter là méthode **`getPrice`** pour la class **`Circle`** il va falloir là dupliquer dans cette exemple nous avons uniquement besoin que de 2 classes(Rectangle, Circle) dans un code plus gros ou nous allons avoir besoin de récupérer les informations plusieurs classe cela va être compliqué et long de faire une méthode pour chaque.

C’est donc là l’intérêt du polymorphisme, c’est-à-dire que grâce à une seule méthode nous allons pouvoir récupérer les éléments de plusieurs classes en même temps.

En utilisant **`les Interfaces`**, pour rappel : Les interfaces objet permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter, sans avoir à définir comment ces méthodes fonctionneront. De par la nature même d'une interface, toutes les méthodes déclarées dans une interface doivent être publiques. 

```php

interface Form
{
    public function getSurface();
}

class Rectangle implements Form
{
    private float $height;
    private float $width;

    public function __construct(float $height, float $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function getSurface(): float
    {
        return $this->height * $this->width;
    }
}

class Circle implements Form
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }
    public function getSurface(): float
    {
        return pow($this->radius, 2) * pi();
    }
}

$rectangle = new Rectangle(12, 7);
echo getPrice($rectangle);
$circle = new Circle(8);
echo getPrice($circle);


```

