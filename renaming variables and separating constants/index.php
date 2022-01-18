<?php
include_once "app/Calculator.php";

$calculator = new Calculator();
echo $calculator->calculate(1,2,"-");
echo "<br>";
echo $calculator->calculate(1,2,"+");
echo "<br>";
echo $calculator->calculate(1,2,"*");
echo "<br>";
echo $calculator->calculate(1,2,"/");
echo "<br>";
echo $calculator->calculate(1,2,"%");