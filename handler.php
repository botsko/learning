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
            $result = pow($a, $b);
            break;
        case '%':
            $result = $a % $b;
            break;
    }
}

if (isset($_REQUEST ["step"])) {
    $a = $_REQUEST['a'];
    $result = [];
    for ($i = 1; $i <= 10; $i++) {
        $result [$i - 1] = pow($a, $i);
    }
    $result = implode(',', $result);
}
