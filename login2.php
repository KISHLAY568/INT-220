<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "welcome " . $_SESSION["username"] . "<br>";
    echo "Your role is " . $_SESSION["role"] . "<br>";
} else {
    echo "please login to the page";
}
