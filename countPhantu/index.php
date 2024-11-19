<?php
$numbers = [1, 2, 3, 4, 5, 2, 1, 1, 3, 1,];
function Counts(array $numbers, $value)
{
    $count = 0;
    foreach ($numbers as $number) {
        if ($number == $value) $count++;
    }
    return $count;
}
echo Counts($numbers, 1);
