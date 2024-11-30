<?php
setcookie("user", "user 1", time() + 3600, "/");
setcookie("name", "KISHLAY", time() + 3600, "/");
setcookie("name1", "KISHLAY1", time() + 3600, "/");
?>

<html>

<body>
    <?php
    if (!isset($_COOKIE["user"])) {
        echo "Cookie named " . $_COOKIE["user"] . " is not set!";
    } else {
        echo "Cookie " . $_COOKIE["user"] . "is set!<br>";
        echo "Value is: " . $_COOKIE["user"] . "<br>";
        print_r($_COOKIE);
    }
    ?>
</body>

</html>