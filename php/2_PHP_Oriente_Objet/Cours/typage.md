# Le Typage 


### Typage : Param & return 


```php

function displayBookInfo(string $title, ?int $year, string ...$authors): string
{
        $msg = '';
        $msg .= $title . ' ';
        $msg .= $year . ' ';
    foreach ($authors as $author) {
        $msg .= $author . ' ';
    }
    return $msg;
}
echo displayBookInfo('titre 1', 2019, 'Alice', 'Bob');
echo displayBookInfo('titre 2', null, 'Aline', 'Jac');

// echo livre('titre 3', 'Année 2021', 'Aline');
# Fatal error: Argument 2 passed to livre() must be of the type int or null

# "?" veut dire : valeur ou null     exemple sur le ?int

```

### Typage : attr

```php

class Book
{
    private array $author;
    private string $title;

    public function __construct(array $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }
    public function getAuthor(): array
    {
        return $this->author;
    }
    public function setAuthor($author): void
    {
        $this->author = $author;
    }
    // getTitle() / setTitle(string $title): void
}

$book = new Book(['Josh', 'Sosa'], 'Welcome to Josh\'s World');
var_dump($book->getAuthor());

```