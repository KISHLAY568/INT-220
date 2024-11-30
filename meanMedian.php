<?php $a = [25, 36, 5, 6, 9, 49, 56, 35, 90, 31];
sort($a);
$n = count($a);
$sum = array_sum($a);
echo "Mean: ", $sum / $n, "<br>";
$mid = ceil($n / 2);
$sum2 = $a[$mid] + $a[$mid - 1];
echo "Median: ", $sum2 / 2;
