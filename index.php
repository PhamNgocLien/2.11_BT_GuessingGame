<?php
function findNumber($number){
    $min = 1;
    $max = 100;
    $mid = (int) ($min + $max)/2;
    while ($mid != $number){
        $mid = floor(($min + $max)/2);
        if ($mid != $number) {
            echo 'Guess: ' . $mid;
            echo '<br>';
        } else {
            echo 'Result: ' . $mid;
        }
        if ($number > $mid){
            $min = $mid;
        } else if ($number < $mid){
            $max = $mid;
        }
    }
}

findNumber(95);

