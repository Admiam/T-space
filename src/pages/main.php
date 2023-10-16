<?php
    require("../components/head.php");
    $createHead = new \components\head();
    $createHead ->createHead();
?>
<html>  
    <body>
        <section class="screen d-flex flex-column">
            <?php
                require("../components/header.php");
                $createHeader = new \components\header();
                $createHeader ->getHeader();
            ?>
            <div class="d-flex flex-column flex-grow-1 justify-content-center align-items-center main-center">
                <h1 class="title">Zapomeňte na kávu a objevte vesmír čajů!</h1>
                <img src="../../assets/main.png" alt="main background image " class="main-img">
            </div>
            <div class="position-relative d-flex justify-content-center align-items-center">
                <svg width="100%" height="50">
                    <rect ry="200" width="100%" height="100" style="fill:rgb(250,250,250);"/>
                    Sorry, your browser does not support SVG.
                </svg>
                <div class="d-flex flex-column align-items-center position-absolute">
                    <h2 class="main-bottom-font">Vyber si svůj</h2>
                    <i class="fa-solid fa-caret-down main-bottom-icon"></i>
                </div>
            </div>
        </section>
        <div class="main-bg-white pt-5">
            <?php
                require("../components/teaSlider.php");
                $createHeader = new \components\teaSlider();
                $createHeader ->getTeaSlider();
            ?>
            
        </div>
    </body>
    <script src="carousel.js"></script>

</html>
