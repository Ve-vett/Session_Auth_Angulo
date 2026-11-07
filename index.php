<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device=width, initial-scale=1.0">
    <title> Session Auth </title>
<head>
<style>
    body {
        margin: 0px;
        padding:0px;
        justify-content: center;
        align-items: center;
    }

    header {
        text-align: center;
        padding: 10px;
        background-color: #6390B8;
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    padding: 100px;
    font-family: arial;
    border-radius: 8px;
    }

    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
    padding: 2px 16px;
    }

    input {
        padding: 8px;
        margin: 10px;
    }

</style>
<body>
<header>
    <h1> Login Page <h1>
</header>
<div class="card">
<div class="container">
    <form action="index.php" method="post">
        Username: <br>
        <input type="text" name="username"> <br>
        Email: <br>
        <input type="email" name="email"> <br>
        Password: <br>
        <input type="password" name="password"> <br>
        <button type="submit" name="login" value="login"> Login </button>
    </form>
</div>
</div>
</body>
</html>

<?php

    if(isset($_POST['login'])) {

        if(!empty($_POST['username']) && 
            !empty($_POST['email']) &&
            !empty($_POST['password'])) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['email'] . "<br>";
    echo $_SESSION['password'] . "<br>";

    header("Location: register.php");

    }
        else {
            echo "Missing <br>"; 
        }
    }
?>

