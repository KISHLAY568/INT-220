<?php
$fptr = fopen("myfile2.txt", "w");
fwrite($fptr, "writing using fwrite() function");
echo "welcome to the page";
fclose($fptr);
