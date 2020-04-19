<?php
include "Stack.php";

function convertFromDecimalToBinary($number)
{
    $stack = new Stack();

    while ($number !=0){
        $quotient = floor($number/2);
        $surplus = $number%2;
        $stack->push($surplus);
        $number = $quotient;
    }

    $binaryNumber = "";
    while (!$stack->isEmpty()){
        $binaryNumber .= $stack->pop();
    }
    return $binaryNumber;
}
echo convertFromDecimalToBinary(10)."<br>";
echo convertFromDecimalToBinary(34)."<br>";
echo convertFromDecimalToBinary(1250)."<br>";
