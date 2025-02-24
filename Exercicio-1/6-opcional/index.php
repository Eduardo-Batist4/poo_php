<?php 
    require_once "CalcInterface.php";
    $interface = new CalcInterface;

    $interface->imprimirResultado($interface->coletarNumero(), $interface->coletarNumero(), $interface->coletarOperador());