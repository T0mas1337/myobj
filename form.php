<?php

if (trim($_POST['numbers']) !== '') {
    $numbers = explode(",", trim($_POST['numbers']));
} else {
    $numbers = [];
}


print_r($numbers);
echo "<br>";

/* Инициализация переменных */

$sum = 0;
$count = 0;
$max = 0;
$min = 0;
$max_key = 0;
$min_key = 0;
$flFirst = true;
$average = 0;
$hi = null;


/* Нахождение максимального и минимального элемента массива */

foreach ($numbers as $key => $value) {
    $sum = $value + $sum;
    $count++;

    if ($flFirst) {
        $max = $value;
        $min = $value;
        $flFirst = false;
    } else {
        if ($value > $max) {
            $max = $value;
            $max_key = $key;

        }
        if ($value < $min) {
            $min = $value;
            $min_key = $key;
        }
    }
}


/* Среднее арифметическое */
if ($count > 0) {
    $average = $sum / $count;
}


/* Перемещение максимального и минимального элемента */

if (trim($_POST['numbers']) !== '') {
    $hold = $numbers[$max_key];
    $numbers[$max_key] = $numbers[$min_key];
    $numbers[$min_key] = $hold;
}


/* Вывод */
print_r($numbers);
echo "<br>";


echo 'Count: ' . $count . "<br>";
echo 'Sum element: ' . $sum . "<br>";
echo 'Maximal element key: ' . $max_key . "<br>";
echo 'Minimal element key: ' . $min_key . "<br>";
echo 'Maximal element: ' . $max . "<br>";
echo 'Minimal element: ' . $min . "<br>";
echo ($count > 0) ? "Average: $average " : "Average Error";

