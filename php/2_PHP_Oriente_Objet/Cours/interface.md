# Interface

Les interfaces objet permettent de créer du code qui spécifie quelles
méthodes une classe doit implémenter, sans avoir à définir
comment ces méthodes fonctionneront.
De par la nature même d'une interface, toutes les méthodes
déclarées dans une interface doivent être publiques.

```php

<?php
interface Fish
{
    public function canSwim();
}

class Dolphin implements Fish
{
    public function canSwim()
    {
        return 'I am a Delphin, and I can swim.';
    }

}
    
class Shark implements Fish
{
    public function canSwim()
    {
        return 'I am a Shark, and I can swim.';
    }
}
```