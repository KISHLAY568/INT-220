<?php
$colors = array("red", "green", "yellow");
foreach ($colors as $i) {
    echo $i . "<br>";
}

$superhero = array("name" => "Peter Parker", "email" => "peterparker@gmail.com", "age" => 18);
foreach ($superhero as $key => $val) {
    echo $key . "::" . $val . "<br>";
}
