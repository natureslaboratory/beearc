<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/components.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,400;1,700&display=swap" media="print" onload="this.media='all'" />
    <script src="https://kit.fontawesome.com/6b035dc64a.js" crossorigin="anonymous"></script>
    <title>BeeArc</title>
</head>

<?php

$isHome = true;

$queryExplode = explode("/", $_SERVER["QUERY_STRING"]);

foreach ($queryExplode as $value) {
    if ($value) {
        $isHome = false;
        break;
    }
}

?>

<body>
    <div class="l-wrap l-wrap--absolute l-wrap--bg-secondary l-sticky-top">
        <nav class="l-restrict c-banner">
            <?php
            if (!$isHome) {
            ?>
                <a href="/" class="c-banner__logo">
                    <img src="/resources/Asset 3@3x-100.jpg" class="c-banner__logo-img">
                </a>
            <?php
            }
            ?>
            <div class="c-navigation" data-type="dynamic" data-breakpoint="768">
                <ul class="c-navbar c-navbar--clear c-navbar--light-text">
                    <li class="c-navbar__element">
                        <a href="/" class="c-navbar__link c-navbar__link--hover-theme">Home</a>
                    </li>
                </ul>
                <div class="c-hamburger">
                    <button class="c-hamburger__button">
                        <div class="c-hamburger__line"></div>
                        <div class="c-hamburger__line"></div>
                        <div class="c-hamburger__line"></div>
                    </button>
                    <ul class="c-hamburger__menu" data-type="slideover" data-expand="accordian">
                        <li class="c-hamburger__element">
                            <a href="/" class="c-hamburger__link c-hamburger__link--hover-theme">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <header class="c-hero c-hero--feature-logo">
        <div class="c-hero__mask">
            <div class="c-hero__content">
                <?php
                if ($isHome) {
                ?>
                    <a href="/" class="c-hero__logo">
                        <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In  -->
                        <?php include("./components/logo.php") ?>
                    </a>
                    <div class="c-hero__placeholder"></div>
                <?php
                }
                ?>
            </div>
            <i class="fas fa-chevron-down c-scroll"></i>
        </div>
        <!-- <div class="c-hero__logo-info l-flow">
            <h2>Why the BeeArc</h2>
            <p>
                The catastrophic demise of the honey bee worldwide has awakened millions to the enormous economic impact they have on our lives - to the complex consequences of a world without them
            </p>
            <p>
                Paradoxically from these fears has emerged a broader understanding - almost a revelation - of the honey bee as a bee – ing with not just economic meaning but with social and community meaning - cultural and spiritual meaning.
            </p>
            <p>
                The BeeArc Project explores how the honey bee can inspire human beings in all three realms of life.
            </p>
        </div> -->
        <!-- <h1 class="c-hero__title">BeeArc</h1> -->
    </header>
    <main>
        <div class="l-block">
            <div class="l-row l-row--centered">
                <section class="col-12 col-md-8 c-section c-animated">
                    <h3 class="c-animated__child c-animated__child--fade-left" data-animation-delay="0">Why the BeeArc</h3>
                    <div class="c-section__content">
                        <p class="c-animated__child c-animated__child--fade-left" data-animation-delay="200">
                            The catastrophic demise of the honey bee worldwide has awakened millions to the enormous economic impact they have on our lives - to the complex consequences of a world without them
                        </p>
                        <p class="c-animated__child c-animated__child--fade-left" data-animation-delay="400">
                            Paradoxically from these fears has emerged a broader understanding - almost a revelation - of the honey bee as a bee – ing with not just economic meaning but with social and community meaning - cultural and spiritual meaning.
                        </p>
                        <p class="c-animated__child c-animated__child--fade-left" data-animation-delay="600">
                            The BeeArc Project explores how the honey bee can inspire human beings in all three realms of life.
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="l-block l-block--light-grey">
            <div class="l-row l-row--centered">
                <section class="col-12 col-md-8 c-section c-section--right c-animated">
                    <h3 style="max-width: none" class="c-animated__child c-animated__child--fade-right" data-animation-delay="0">The Three Dimensions of the BeeArc</h3>
                    <div class="c-section__content">
                        <h4 class="c-animated__child c-animated__child--fade-right" data-animation-delay="200">Cultural and Spiritual Health</h4>
                        <p class="c-animated__child c-animated__child--fade-right" data-animation-delay="200">
                            How we can support the Honey Bees Cultural and Spiritual Health?<br/>
                            How the Honey Bee can support our Cultural and Spiritual health?
                        </p>
    
                        <h4 class="c-animated__child c-animated__child--fade-right" data-animation-delay="400">Social and Community Health</h4>
                        <p class="c-animated__child c-animated__child--fade-right" data-animation-delay="400">
                            How we can support the Honey Bees Social and Community health?<br/>
                            How the Honey Bee can support our Social and Community health?
                        </p>
    
                        <h4 class="c-animated__child c-animated__child--fade-right" data-animation-delay="600">Economic and Environmental Health</h4>
                        <p class="c-animated__child c-animated__child--fade-right" data-animation-delay="600">
                            How we can support the Honey Bees Economic and Environmental health?<br/>
                            How the Honey Bee can support our Economic and Environmental health?
                        <p>
                    </div>
                </section>
            </div>
        </div>

    </main>
    <footer class="c-footer">
        <div class="l-restrict">
            &#169; 2021
        </div>
    </footer>
</body>
<script type="module" src="assets/js/base.js?v=<?php echo rand(); ?>"></script>
<script src="https://kit.fontawesome.com/6b035dc64a.js" crossorigin="anonymous"></script>

</html>