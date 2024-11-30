<?php $d = date("D");
if ($d == "Tue") {
    echo "It's Tuesday!" . "<br>";
}

$t = date("H");
echo $t . "<br>";
if ($t < "20") {
    echo "Have a good day!";
}
