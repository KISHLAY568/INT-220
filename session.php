<?php
session_start();
$_SESSION["username"] = ["kishlay"];
$_SESSION["role"] = ["admin"];

echo "session started, username is: " . $_SESSION["username"] . ", role is: " . $_SESSION["role"] . "<br>";
print_r($_SESSION);

unset($_SESSION["username"]);

print_r($_SESSION);

session_unset();

session_destroy();

if (empty($_SESSION)) {
    echo "session variables are now cleared and the session is destroyed";
} else {
    echo "session is still active";
}
