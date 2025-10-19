<?php
    require_once __DIR__.'/config/paths.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">

    

    <title>Home</title>
</head>

<body>

    <?php 
        require_once BASE_PATH.'/partials/header.php'
    ?>

    <main>
        <div class="carousel">
            <div class="slides" id="slides">
                <div class="slide"><img src="assets/img/notice1.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="assets/img/notice2.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="assets/img/notice3.jpg" alt="Slide 3"></div>
            </div>

            <button class="left-arrow" aria-label="left">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="right-arrow" aria-label="right">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
            <button class="btn-show-news">SHOW NEWS</button>
        </div>

        <div class="container">
            <div class="info-container">
                <img src="assets/img/image1.png" alt="imagen1">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Exercitationem pariatur quas sequi reprehenderit praesentium 
                    fugiat a excepturi voluptatibus aspernatur accusantium, saepe 
                    iste quidem molestiae aperiam. Sit numquam at quas iste?</p>
            </div>
            <div class="info-container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Exercitationem pariatur quas sequi reprehenderit praesentium 
                    fugiat a excepturi voluptatibus aspernatur accusantium, saepe 
                    iste quidem molestiae aperiam. Sit numquam at quas iste?</p>
                    <img src="assets/img/image2.png" alt="imagen1">
            </div>
            <div class="info-container">
                <img src="assets/img/image3.png" alt="imagen1">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Exercitationem pariatur quas sequi reprehenderit praesentium 
                    fugiat a excepturi voluptatibus aspernatur accusantium, saepe 
                    iste quidem molestiae aperiam. Sit numquam at quas iste?</p>
            </div>
        </div>
        
    </main>

    <?php require_once BASE_PATH . '/partials/footer.php'; ?>
    <script src="<?= BASE_URL ?>/assets/js/carrousel.js"></script>
    
    
</body>

</html>