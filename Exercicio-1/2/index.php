<?php

include_once "University.php";
include_once "Person.php";

$university = new University("3c+");
$university->nameInfo();

$university2 = new University("we3st");
$university2->nameInfo();

$person = new Person("Eduardo", $university);
$person->personInfo();

$person2 = new Person("Fallen", $university2);
$person2->personInfo();