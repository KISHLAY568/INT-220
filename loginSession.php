<?php
session_start();
$_SESSION["username"] = "user1";
$_SESSION["role"] = "admin";
echo "welcome to the page";
