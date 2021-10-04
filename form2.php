<?php
if (trim($_POST['numbers']) !== '') {
    $numbers = explode(",", trim($_POST['numbers']));
} else {
    $numbers = [];
}

$sum = $numbers[0];
$max = $numbers[0];
$min = $numbers[0];
$max_key = 0;
$min_key = 0;
$average = 0;
print_r($numbers);
$count = count($numbers);
echo "<br>";

for ($i = 1; $i < $count; $i++) {

    $sum = $numbers[$i] + $sum;

    if ($numbers[$i] > $max)  {
        $max = $numbers[$i];
        $max_key = $i;

    }
    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
        $min_key = $i;

    }
}

/* Среднее  */
if ($count > 0) {
    $average = $sum / count($numbers);
}

/* Перемещение максимального и минимального элемента */

if (!empty($numbers)) {
    $hold = $numbers[$max_key];
    $numbers[$max_key] = $numbers[$min_key];
    $numbers[$min_key] = $hold;
}
print_r($numbers);
echo "<br>";



echo 'Sum element: ' . $sum . "<br>";
echo 'Maximal element key: ' . $max_key . "<br>";
echo 'Minimal element key: ' . $min_key . "<br>";
echo 'Maximal element: ' . $max . "<br>";
echo 'Minimal element: ' . $min . "<br>";
echo "Average: " . (($count > 0)? $average: "Error");
