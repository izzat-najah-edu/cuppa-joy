<?php
session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
    header("Location: dashboard");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <title>Login Panel</title>
</head>
<body>
<header>
    <h1>Admin Login</h1>
</header>
<main>
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Log In">
    </form>
</main>
</body>
</html>
