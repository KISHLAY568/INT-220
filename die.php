<?php
if (file_exists("mytestfile.txt")) {
    $file = fopen("mytestfile.txt", "r");
    $a = fread($file, filesize('mytestfile.txt'));
    echo $a;
    fclose($file);
} else {
    die("Error: The file does not exist.");
}
