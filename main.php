<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Landing page | parallax</title>
    <link rel="icon" href="img/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.js/parallax.min.js"></script>
</head>
<body>
    <header  class="parallax-window" data-parallax="scroll" data-image-src="img/jkt.jfif">
        <nav>
            <h1 class="logo">
                <a href="/">I N D O N E S I A</a>
            </h1>
            <a href="" class="btn-sign-up">Sign up</a>
        </nav>
        <div class="header-title">JAKARTA</div>
        <div class="header-bottom">
            <p class="today-date"><?= date('l, d-m-Y');?></p>
            <ul class="socmed">
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Github</a></li>
            </ul>
        </div>
    </header>

    <section id="about">
        <div class="aboutcon">
            <div class="img-gallery">
                <div class="img-box">
                    <img src="img/monas.jfif" alt="image"/>
                    <h3 class="jkt">J</h3>
                </div>
                <div class="img-box">
                    <img src="img/senayan.jfif" alt="image"/>
                    <h3 class="jkt">A</h3>
                </div>
                <div class="img-box">
                    <img src="img/kotu.png" alt="image"/>
                    <h3 class="jkt">K</h3>
                </div>
                <div class="img-box">
                    <img src="img/monum.jfif" alt="image"/>
                    <h3 class="jkt">A</h3>
                </div>
                <div class="img-box">
                    <img src="img/night.jfif" alt="image"/>
                    <h3 class="jkt">R</h3>
                </div>
                <div class="img-box">
                    <img src="img/panco.jfif" alt="image"/>
                    <h3 class="jkt">T</h3>
                </div>
                <div class="img-box">
                    <img src="img/sunset.jfif" alt="image"/>
                    <h3 class="jkt">A</h3>
                </div>
            </div>
            <div class="about-info">
                Jakarta Merupakan ibu kota Indonesia,Jakarta terkenal dengan keindahan  ditengah Kota
            </div>
        </div>
    </section>

    <footer>made by TASYA</footer>
</body>
</html>