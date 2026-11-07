<?php
    session_start();
    if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
$userid = (int)$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device=width, initial-scale=1.0">
    <title> Session Auth </title>
<head>
<body>

</body>
</html>