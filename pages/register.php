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

    <main class="register-container">
        <div>
            <i class="fa-solid fa-user" aria-hidden="true"></i>
            <h5>Register</h5>
            <form action="#" method="post">
                <input type="text" name="registerName" id="registerName" placeholder="Name">
                <input type="text" name="registerLastname" id="registerLastname" placeholder="Lastname">
                <input type="email" name="registerEmail" id="registerEmail" placeholder="Email">
                <input type="tel" name="registerPhoneNumber" id="registerPhoneNumber" placeholder="Phone number">
                <input type="date" name="registerDate" id="registerDate" placeholder="Date of birth">
                <input type="text" name="registerAddress" id="registerAddress" placeholder="Address">
                <div class="box-register-genero">
                    <label for="register-genero">Genero: </label>
                    <select name="register-genero" id="register-genero">
                        <option value="No-indicado">No Indicado</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <a href="<?= BASE_URL ?>/pages/login.php">Go to login</a>
                <input type="submit" value="Register">
            </form>
        </div>
    </main>

    <?php require_once BASE_PATH . '/partials/footer.php';  ?>
    <script src="<?= BASE_URL ?>/js/home.js"></script>
</body>
</html>