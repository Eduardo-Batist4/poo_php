<?php

require_once "Person.php";

class Book {
    public Person $person;
    public string $title;
    public string $author;
    public int $numOfPages;
    public bool $available = true;
    public $rentFor = null;

    public function __construct( string $title, string $author, int $numOfPages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->numOfPages = $numOfPages;
    }

    public function rentBook (Person $person) {
        if ($this->available) {
            $this->available = false;
            $this->rentFor = $person->name;
            echo "O livro '{$this->title}' foi alugado por {$person->getName()}.\n";
        } else {
            echo "O livro '{$this->title}' já está alugado.\n";
        }
    }

    public function returnBook () {
        if (!$this->available) {
            unset($this->rentFor);
            $this->available = true;
            echo "O livro '{$this->title}' foi devolvido com sucesso!\n";
        } else {
            echo "O livro '{$this->title}' já está disponível.\n";
        }
    }

    public function bookInfo () {
        if ($this->available) {
            echo "Livro: {$this->title} - Autor: {$this->author} - NP: {$this->numOfPages} (Páginas) - Disponível\n";
        } else {
            echo "Livro: {$this->title} - Autor: {$this->author} - NP: {$this->numOfPages} (Páginas) - Indisponível\n";;
        }
    }
}