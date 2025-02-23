<?php
$cookie_name = "username";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Cookies</title>
</head>
<body>
<?php
    if (isset($_COOKIE[$cookie_name])) {
        echo 'Cookie ' . $cookie_name . ' is set to ' . $cookie_value . '.';
    } else {
        echo 'Cookie ' . $cookie_name . ' not is set.';
    }
?>
</body>
</html>