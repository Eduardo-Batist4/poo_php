<?php

include_once "University.php";
include_once "Departament.php";
include_once "Person.php";

$departament1 = new Departament("Policia", "Chique-Chique");

$university = new University("3c+");
$university->nameInfo(); 

$university2 = new University("we3st", $departament1);
$university2->nameInfo();

$person = new Person("Eduardo", $university);
$person->personInfo();

$person2 = new Person("Fallen", $university2);
$person2->personInfo();