<?php


class Book
{

    protected string $title;
    protected int $nb_pages;

    function __construct(string $t,int $nbp)
    {
        $this->title = $t;
        $this->nb_pages = $nbp;

        if ($nbp >= 100) {
            throw new Exception(" Il y a plus de 100 pages !");
        }
    }
}

try {
    $book = new Book("Josh's World", 100);
    echo "Il y a moins de 100 pages !";
} catch (Exception $exception) {
    echo $exception->getMessage();
}
