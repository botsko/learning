<?php
$result = '-';
if (isset($_REQUEST["calc"])) {
    $a = $_REQUEST ['a'];
    $b = $_REQUEST ['b'];
    $operation = $_REQUEST ['operation'];
    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '^':
            $result = pow($a,$b);
            break;
        case '%':
            $result = $a % $b;
            break;
    }
}