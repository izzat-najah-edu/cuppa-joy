<?php require_once "config.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <title>Dashboard | Admin</title>
</head>
<body>
<p>You are logged in!</p>
<form action="authenticate.php" method="post">
    <input type="hidden" name="logout" value="true">
    <input type="submit" value="Logout">
</form>
</body>
</html>
