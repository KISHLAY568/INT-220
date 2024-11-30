<?php
$fptr = fopen("myfile.txt", "r");
echo fgets($fptr);
echo fgets($fptr);
var_dump(fgets($fptr));
fclose($fptr);
