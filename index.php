<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    

    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./img/logo.png" alt="HairClinic logo" width="40" height="40">
                <h1>HAIR CLINIC</h1>
            </div>
            <button class="menu-toggle" id="menu-toggle" aria-label="Open menu">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>
            <div class="list-options-menu" id="list-options-menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">APPOINTMENTS</a></li>
                    <li><a href="#">AD.USERS</a></li>
                    <li><a href="#">AD.NEWS</a></li>
                    <li><a href="#">AD.APPOINTMENT</a></li>
                    <li>
                        <a href="#" class="user-icon" aria-label="Go to my profile">
                            <i class="fa-solid fa-user" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <div class="carousel">
            <div class="slides" id="slides">
                <div class="slide"><img src="img/notice1.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="img/notice2.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="img/notice3.jpg" alt="Slide 3"></div>
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
                <img src="img/image1.png" alt="imagen1">
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
                    <img src="img/image2.png" alt="imagen1">
            </div>
            <div class="info-container">
                <img src="img/image3.png" alt="imagen1">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Exercitationem pariatur quas sequi reprehenderit praesentium 
                    fugiat a excepturi voluptatibus aspernatur accusantium, saepe 
                    iste quidem molestiae aperiam. Sit numquam at quas iste?</p>
            </div>
        </div>
        
    </main>

    <footer>
        <div class="footer-container">
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="info-footer">
                <p>PONTE EN CONTACTO CON NOSOTROS 999 88 86 66</p>
                <p>ESTAMOS EN CALLE SUIZA 24, 28052, MADRID, ESPAÑA</p>
                <p>@DERECHOS DE AUTOR@</p>
            </div>
        </div>
    </footer>

    <script src="./js/home.js"></script>
    

</body>

</html>