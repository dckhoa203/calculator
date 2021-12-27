<?php

require_once './src/Calculator.php';

$calculator = new \Calculator\Calculator();

echo "result: " . $calculator->sum(5, 5);

echo "\n";