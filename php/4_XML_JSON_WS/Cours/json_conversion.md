# JSON : Conversion



## Object -> JSON

```php
<?php

class User
{
    public $name = "John";
    public $age  = 30;
    public $city = "New York";
}

$myObj = new User();

$myJSON = json_encode($myObj);

echo $myJSON;
```

## Tableau -> JSON

```php
<?php

$myArr = array("John", "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);

echo $myJSON;
```

## JSON -> PHP

```php
<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$jsonToObj = json_decode($json);

echo $jsonToObj->a;
echo "<hr>";

$jsonToArray = json_decode($json, true);

echo $jsonToArray["a"];


```