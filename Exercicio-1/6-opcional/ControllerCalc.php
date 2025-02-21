<?php 

require_once "Calcinterface.php";
require_once "CalcMemory.php";

class ControllerCalc extends CalcMemory {

    public function calc($number1, $number2, $operator) {
        parent::__construct($number1, $number2, $operator);
    }

}

$oi = new CalcInterface();
$oi->interface();
$oi->getNumAndOpe();

$oi2 = new CalcMemory();
$oi2->getNumAndOpe();