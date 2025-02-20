<?php

require_once "Obj.php";
require_once "Triangle.php";
require_once "Rectangle.php";

$obj = new Obj(8, 5);

$triangle = new Triangle(8, 5, "triangulo");
$triangle->calculateArea();

$rectangle = new Rectangle(6, 8, "retangulo");
$rectangle->calculateArea();
$rectangle->isSquare();
