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
    <title>Boilerplate</title>
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
                <ul class="c-navbar c-navbar--clear">
                    <li class="c-navbar__element">
                        <a href="#" class="c-navbar__link c-navbar__link--hover-invert">Home</a>
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
                            <a href="#" class="c-hamburger__link c-hamburger__link--hover-invert">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <header class="c-hero c-hero--feature-logo">
        <?php
        if ($isHome) {
            ?>
            <a href="/" class="c-hero__logo">
            <img src="/resources/Asset 3@3x-100.jpg" class="c-hero__title-logo--feature">
        </a>
        <?php
        }
        ?>
        <div class="c-hero__logo-info l-flow">
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
        </div>
        <!-- <h1 class="c-hero__title">BeeArc</h1> -->
    </header>
    <main>

    </main>
    <footer class="c-footer">
        <div class="l-restrict">
            A footer.
        </div>
    </footer>
</body>
<script type="module" src="assets/js/base.js?v=<?php echo rand(); ?>"></script>
<script src="https://kit.fontawesome.com/6b035dc64a.js" crossorigin="anonymous"></script>

</html>