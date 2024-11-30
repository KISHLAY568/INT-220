<?php
$a = [1, 2, 1, 4, 5, 2, 3, 7, 8, 3];
$b = array_unique($a);
foreach ($b as $value) {
    echo $value, " ";
}
print_r($b);
