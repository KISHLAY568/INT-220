<!-- 3rd largest element -->
<?php $a = [25, 36, 5, 6, 9, 49, 56, 35, 90];
sort($a);
$n = count($a);
echo $a[$n - 3];
