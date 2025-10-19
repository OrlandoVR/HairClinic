<?php
    require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">

</head>
<body>
    <?php
        require_once BASE_PATH . '/partials/header.php';
    ?>

    <main class="container">
        <section class="news-container">
            <h2>NOTICIAS</h2>
            <div class="new">
                <img src="<?= BASE_URL ?>/img/notice1.jpg" alt="noticia1">
                <div class="text-news">
                    <h3>Titulo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente modi doloribus aspernatur voluptate quasi animi repellat sunt, corrupti ut ipsam pariatur nobis saepe magnam eaque dolorum, labore molestiae nulla.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente modi doloribus aspernatur voluptate quasi animi repellat sunt, corrupti ut ipsam pariatur nobis saepe magnam eaque dolorum, labore molestiae nulla.

                    </p>
                    <a href="#">Ver noticia completa</a>
                    <span class="meta">
                        Author • <time datetime="2025-09-12T20:58">12 de septiembre 2025 - 20:58</time>
                    </span>
                </div>
            </div>
            <div class="new">
                <img src="<?= BASE_URL ?>/img/notice2.jpg" alt="noticia2">
                <div class="text-news">
                    <h3>Titulo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente modi doloribus aspernatur voluptate quasi animi repellat sunt, corrupti ut ipsam pariatur nobis saepe magnam eaque dolorum, labore molestiae nulla.
                    </p>
                    <a href="#">Ver noticia completa</a>
                    <span class="meta">
                        Author • <time datetime="2025-09-12T20:58">12 de septiembre 2025 - 20:58</time>
                    </span>
                </div>
            </div>
            <div class="new">
                <img src="<?= BASE_URL ?>/img/notice3.jpg" alt="noticia2">
                <div class="text-news">
                    <h3>Titulo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente modi doloribus aspernatur voluptate quasi animi repellat sunt, corrupti ut ipsam pariatur nobis saepe magnam eaque dolorum, labore molestiae nulla.
                    </p>
                    <a href="#">Ver noticia completa</a>
                    <span class="meta">
                        Author • <time datetime="2025-09-12T20:58">12 de septiembre 2025 - 20:58</time>
                    </span>
                </div>
            </div>
        </section>
    </main>
    

    <?php require_once BASE_PATH . '/partials/footer.php'; ?>
    <script src="<?= BASE_URL ?>/js/home.js"></script>
</body>
</html>