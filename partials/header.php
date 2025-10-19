<header>
    <nav>
        <div class="logo">
            <img src="<?= BASE_URL ?>/assets/img/logo.png" alt="HairClinic logo" width="40" height="40">
            <h1>HAIR CLINIC</h1>
        </div>
        <button class="menu-toggle" id="menu-toggle" aria-label="Open menu">
            <i class="fa-solid fa-bars" aria-hidden="true"></i>
        </button>
        <div class="list-options-menu" id="list-options-menu">
            <ul>
                <li><a href="<?= BASE_URL ?>/index.php">HOME</a></li>
                <li><a href="<?= BASE_URL ?>/views/news.php">NEWS</a></li>
                <li><a href="#">APPOINTMENTS</a></li>
                <li><a href="#">AD.USERS</a></li>
                <li><a href="#">AD.NEWS</a></li>
                <li><a href="#">AD.APPOINTMENT</a></li>
                <li>
                    <a href="<?= BASE_URL ?>/views/login.php" class="user-icon" aria-label="Go to my profile">
                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>