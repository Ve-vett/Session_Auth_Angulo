<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
        exit();
    }
    $error = " ";
    $success = " ";
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title> Register Form </title>
</head>
<style>
    body {
        padding: 0px;
        margin: 0px;
    }
</style>

<body>
    <h1> Register Form </h1>
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>

