<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $jlh = count($arr);
    $positif = 0;
    $negatif = 0;
    $nol = 0;
    
    foreach ($arr as $velue){
        if ($velue >0){
            $positif += 1;
        }elseif($velue <0){
            $negatif += 1;
        }else{
            $nol += 1;
        }
    }
    echo ($positif/$jlh)."\n";
    echo ($negatif/$jlh)."\n";
    echo ($nol/$jlh)."\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
