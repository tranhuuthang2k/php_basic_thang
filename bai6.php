<?php
$str = "124,888,895";

$repl = str_replace(',', '', $str);

$array = str_split($repl, 3);

$max = 0;
$maxTotal = 0;

foreach ($array as $number) {
    $arrNumber = str_split($number, 1); //number 124 888 895
    $total = 0;

    foreach ($arrNumber as $x) {
        $numberParsed = (int)$x; // $ 1 2 4
        if ($numberParsed % 2 == 0) {
            $total += $numberParsed; //6
        }
    }

    if ($total > $maxTotal) {
        $maxTotal = $total;
        $max = $number;
    }
}

echo  $max;
