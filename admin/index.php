<?php namespace html;

session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
    header("Location: dashboard.php");
    exit;
}

require_once "../includes/render.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="icon" href="../assets/images/icons/favicon.png" type="image/x-icon">
    <title>Login | Admin</title>
</head>
<body class="bg-light">
<main>
    <?php echo imageOverlay("../assets/images/backgrounds/worker.jpg", "ADMIN LOGIN") ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="actions/authenticate.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
