<?php

require_once "Person.php";
require_once "Book.php";

$person1 = new Person("João Mendes", "jpcm@teste.com", "Campinas", 11998375521);

$book1 = new Book("Entendendo Algoritmos", "Aditya Y. Bhargava", 263);

$book1->bookInfo(); // Informação do livro

$book1->rentBook($person1); // Alugando

$book1->bookInfo(); // Informação do livro

$book1->rentBook($person1); // Tentando alugar de novo

$book1->returnBook(); // Devolvendo o livro

$book1->bookInfo(); // Informação do livro

$book1->returnBook(); // Tentando Devolver o livro disponível
