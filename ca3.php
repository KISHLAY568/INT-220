<!DOCTYPE html>
<html>

<head>
    <title>IP Address Validator</title>
</head>

<body>
    <h1>Enter an IP Address</h1>
    <form method="POST" action="">
        <label for="ip">IP Address:</label>
        <input type="text" id="ip" name="ip" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ip = $_POST['ip'];
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            echo "<p>The IP address '$ip' is valid.</p>";
        } else {
            echo "<p>The IP address '$ip' is not valid.</p>";
        }
    }
    ?>
</body>

</html>