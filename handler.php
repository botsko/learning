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

if (isset($_REQUEST ["riv"])) {
    $a = intval($_REQUEST ['a']);
    $b = intval($_REQUEST ['b']);
    $c = intval($_REQUEST ['c']);
    $D = pow($b, 2) - 4 * $a * $c;
    if ($D < 0) {
        $result = "не має розвязків";
    } elseif ($D == 0) {
        $result = -$b / 2 * $a;
    } else {
        $x1 = (-$b - sqrt($D)) / 2 * $a;
        $x2 = (-$b + sqrt($D)) / 2 * $a;
        $result = implode(',', [$x1, $x2]);
    }
}

if (isset($_REQUEST ["forma"])) {
    $a = ($_REQUEST ['a']);
    $b = ($_REQUEST ['b']);
    if ($a > $b) {
        $result =$a;
    } elseif ($a < $b) {
        $result = $a;
    } else {
        $result = '=';
    }
}


