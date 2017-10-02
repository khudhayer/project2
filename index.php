<?php
require 'config.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body
        {
            background-image: url("images/good.jpg");
            background-position: inherit;
            background-size: cover;

        }
    </style>
</head>

<body >
<h1 class="lo"> Login </h1>
<form class="s"  action="users.php" method="post">
    <table class="s1">
        <tr>
            <td > Username: </td> <td ><input type="text" name="username" placeholder="Enter username" /></td>
        </tr>
        <tr>
            <td >Password: </td> <td><input type="password" name="password" placeholder="Enter password" /></td>
        </tr>

        <tr>
            <td></td> <td><input type="submit" name="submit" value="login"></td>
        </tr>
    </table>
</form>
</body>
</html>