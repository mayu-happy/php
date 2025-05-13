<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br/>";
}
$i = 0;
while ($i < 3) {
    echo "i=" . $i . "<br/>";
    $i += 1;
}
echo "<br />";
$count = 0;
while ($count < 25) {
    if ($count == 20) {
        break;
    }
    $count++;
    echo $count . "<br/>";
}
echo "<br/>";
$i = 0;
while ($i < 30) {
    if ($i > 20) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}
echo "<br/>";
$title_01 = "Ｑ．while文を使用して、結果が以下のようになるコードを記述しましょう。";
echo $title_01 . "<br/>";
$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}
$title_02 = "Ｑ．do...while文を使用して、結果が以下のようになるコードを記述しましょう。";
echo $title_02 . "<br/>";
$num = 0;
do {
    echo "\$num =" . $num . "<br/>";
    $num++;
} while ($num < 3);
echo "<br/>";
$title_03 = "応用問題";
echo $title_03;
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    } else if ($i % 3 == 0) {
        echo $Fizz;
    } else if ($i % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i;
    }
}
echo "<br/>";
echo "<br/>";
$title_04 = "Ｑ．二重ループを使用して、結果が以下のようになるコードを記述しましょう";
echo $title_04 . "<br/>";
for ($i =  1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br/>";
}
