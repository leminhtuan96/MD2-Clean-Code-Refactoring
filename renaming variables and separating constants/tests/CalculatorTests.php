<?php

use PHPUnit\Framework\TestCase;

include_once "..\app\Calculator.php";

class CalculatorTests extends TestCase
{
    public function testAddition()
    {
        $s = new Calculator();
        $firstOperand = 1;
        $secondOperand = 2;
        $operator = "+";
        $result = $s->calculate($firstOperand, $secondOperand, $operator);
        $expect = 3;
        $this->assertEquals($result, $expect);
    }
}