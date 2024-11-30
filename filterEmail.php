<?php
$email = "user@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}

$string = "<h1>Hello World!</h1>";
$sanitizedString = filter_var($string, FILTER_SANITIZE_STRING);

echo "<br>$sanitizedString";

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "<br>Email is not valid";
} else {
    echo "<br>Email is valid";
}
