# Getter / Setter

Nous voulons que le mot de passe contienne au moins 6 caractères.
Et que celui-ci soit encodé (crypté) au moment où on l’affiche.


```php

class User
{
    private $email;
    private $password;

    function __construct($e,$p)
    {
        if(strlen($p) >= 6){
            $this->email = $e;
            $this->password = $p;
        }else{
            echo "Au moins 6 caractères!";
        }
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {   
        $this->email = $e;
    }

    public function getPassword()
    {
        return md5($this->password);
    }
    
    public function setPassword($p)
    {
        if(strlen($p) >= 6){
            $this->password = $p;
        }else{
            echo "Au moins 6 caractères!";
        }
    }
}
$user = new User('leopaul@email.com', 'password');
$user->setPassword('12345');
echo $user->getPassword();
```