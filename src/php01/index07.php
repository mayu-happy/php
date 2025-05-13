<?php
// function outputNumber($a)
// {
//     $a = 100;
//     echo "引数の値は" . $a . "です";
//     return;
// }

// outputNumber(8);
// echo "<br/>";

// function text($number1, $number2)
// {
//     $value = $number1 + $number2;
//     return $value;
// }
// $total = text(2, 3);
// echo $total . "<br/>";

function total_score($score1, $score2, $score3 = 0)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 180 && $total < 200) {
        echo $total . "点なので合格です";
    } else if ($total >= 200) {
        echo $total . "スーパー合格";
    } else {
        echo $total . "点なので不合格です";
    }
}

// $score1 = 90;
// $score2 = 80;
// $score3 = 60;
total_score(200, 0, 0);


// function getSquareArea($base, $height)
// {
//     return $base * $height;
// }
// function getTriangleArea($base, $height)
// {
//     return $base * $height / 2;
// }
// function getTrapezoidArea($upperBase, $lowerBase, $height)
// {
//     return ($upperBase + $lowerBase) * $height / 2;
// }

// echo getSquareArea(5, 5) . "\n";
// echo getTriangleArea(7, 8) . "\n";
// echo getTrapezoidArea(4, 5, 4);
