<?php
    require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">
</head>
<body>
    
    <?php require_once BASE_PATH . '/partials/header.php'; ?>

    <main class="login-container">
        <div>
            <i class="fa-solid fa-user" aria-hidden="true"></i>
            <h5>User Login</h5>
            <form action="#" method="post">
                <input type="text" name="loginUsername" id="loginUsername" placeholder="Username">
                <input type="text" name="loginPassword" id="loginPassword" placeholder="Password">
                <a href="#" class="login-forgot-pass">Forgot Password?</a>

                <a href="<?= BASE_URL ?>/pages/register.php">Create account</a>
                <input type="submit" value="Login">
            </form>
        </div>
    </main>

    <?php require_once BASE_PATH . '/partials/footer.php';  ?>
    <script src="<?= BASE_PATH ?>/js/home.js"></script>
</body>
</html>