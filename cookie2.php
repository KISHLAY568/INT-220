<?php
$cookie_name = "visit_count";

if(isset($_GET['reset'])){
    setcookie($cookie_name, 0, time() - 3600);
    $visit_count = 0;
    echo "Cookie is deleted";
} else {
    if(isset($_COOKIE[$cookie_name])) {
        $visit_count = $_COOKIE[$cookie_name] + 1;
    } else {
        $visit_count = 1;
    }
    setcookie($cookie_name, $visit_count, time() + (86400 * 30)); // 86400 = 1 day
    echo "You have visited this site $visit_count times.";
}
?>
