<?php

// readfile("myfile.txt");
$fptr = fopen("myfile.txt", "r");
echo fread($fptr, filesize("myfile.txt"));

fclose($fptr);
