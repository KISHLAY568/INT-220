<?php
$strings = ["apple", "banana", "cherry", "apple", "date", "banana", "fig", "grape", "cherry"];
$a = array_unique($strings);
sort($a);
$n = count($a);
$k = $n - 2;
echo "Second string: $a[1]" . "<br>";
echo "Second-to-last string: $a[$k]";
