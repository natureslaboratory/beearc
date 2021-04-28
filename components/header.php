<!DOCTYPE html>
<html lang="en">

<?php

$root = $_SERVER["HTTPS"] ? "https://" : "http://" . $_SERVER["HTTP_HOST"] . "/";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/base.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/layout.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/components.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,400;1,700&display=swap" media="print" onload="this.media='all'" />
    <script src="https://kit.fontawesome.com/6b035dc64a.js" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>

<?php

$isHome = true;

$queryExplode = explode("/", $_SERVER["REQUEST_URI"]);

foreach ($queryExplode as $value) {
    if ($value) {
        $isHome = false;
        break;
    }
}

?>

<body>
    <div class="l-wrap l-wrap--absolute l-wrap--bg-white l-sticky-top">
        <nav class="l-restrict c-banner">
            <?php
            if (!$isHome) {
            ?>
                <a href="/" class="c-banner__logo">
                    <?php
                    include("logo_small.php");
                    ?>
                </a>
            <?php
            }
            ?>
            <div class="c-navigation" data-type="dynamic" data-breakpoint="768">
                <ul class="c-navbar c-navbar--clear c-navbar--light-text">
                    <li class="c-navbar__element">
                        <a href="/" class="c-navbar__link c-navbar__link--hover-theme-text">Home</a>
                    </li>
                    <li class="c-navbar__element">
                        <a href="/#beearc" class="c-navbar__link c-navbar__link--hover-theme-text">BeeArc</a>
                    </li>
                    <li class="c-navbar__element">
                        <button href="#" class="c-navbar__button c-navbar__link--hover-theme-text">
                            The Hive
                            <i class="fas fa-chevron-down c-icon c-icon--navbar" aria-hidden="true"></i>
                        </button>
                        <ul class="c-navbar__sub-menu ">
                            <li class="c-navbar__sub-element">
                                <a href="/#discovery-center" class="c-navbar__sub-link c-navbar__sub-link--hover-theme-text">
                                    The Discovery Center
                                </a>
                            </li>
                            <li class="c-navbar__sub-element">
                                <a href="/#research-center" class="c-navbar__sub-link c-navbar__sub-link--hover-theme-text">
                                    The Research Centre
                                </a>
                            </li>
                            <li class="c-navbar__sub-element">
                                <a href="/#sustainable-community" class="c-navbar__sub-link c-navbar__sub-link--hover-theme-text">
                                    The Honeybee Village
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="c-navbar__element">
                        <a href="/community" class="c-navbar__link c-navbar__link--hover-theme-text">Community</a>
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
                            <a href="/" class="c-hamburger__link c-hamburger__link--hover-theme-text">Home</a>
                        </li>
                        <li class="c-hamburger__element">
                            <a href="/#beearc" class="c-hamburger__link c-hamburger__link--hover-theme-text">BeeArc</a>
                        </li>
                        <li class="c-hamburger__element">
                            <button href="#" class="c-hamburger__element-button c-hamburger__link--hover-theme-text">
                                <i class="fas fa-chevron-down c-icon c-icon--hamburger" aria-hidden="true"></i>
                                The Hive
                            </button>
                            <ul class="c-hamburger__sub-menu c-super-menu c-super-menu--hamburger">
                                <li class="c-super-menu__item c-super-menu__item--hamburger">
                                    <a href="/#discovery-center" class="c-super-menu__title-link c-hamburger__sub-link">
                                        <h3 class="c-super-menu__title">The Discovery Center</h3>
                                        <p class="c-super-menu__sub-title">The Mystery of the Honeybee</p>
                                    </a>
                                </li>
                                <li class="c-super-menu__item c-super-menu__item--hamburger">
                                    <a href="/#research-center" class="c-super-menu__title-link c-hamburger__sub-link">
                                        <h3 class="c-super-menu__title">The BeeArc Research Centre</h3>
                                        <p class="c-super-menu__sub-title">A College of Future Living</p>
                                    </a>
                                </li>
                                <li class="c-super-menu__item c-super-menu__item--hamburger">
                                    <a href="/#sustainable-community" class="c-super-menu__title-link c-hamburger__sub-link">
                                        <h3 class="c-super-menu__title">The Honeybee Village</h3>
                                        <p class="c-super-menu__sub-title">A Model of Small Scale Sustainable Community</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-hamburger__element">
                            <a href="/community" class="c-hamburger__link c-hamburger__link--hover-theme-text">Community</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <?php if ($fullHeader) { ?>
        <header class="c-hero c-hero--dark c-hero--feature-logo">
            <div class="c-hero__mask c-animated" <?php if ($overlayColour) echo "style='background: $overlayColour'" ?>>
                <div class="c-hero__content c-hero__content--raised">
                    <div href="/" class="c-hero__logo">
                        <?php include("./components/logo.php") ?>
                    </div>
                    <a href="http://www.threescompany.info/" target="_blank" class="c-hero__threes-logo-wrapper">
                        <!-- <div class="c-hero__threes-logo-hex">
                            <?php //include("./components/beearc_1_hex.php") ?>
                        </div> -->
                        <?php include("./components/threes_company_logo.php") ?>
                        <p class="c-hero__threes-logo-text">
                            in association with </br> <strong>Threes Company</strong>
                        </p>
                    </a>
                    <!-- <p class="c-hero__content-tagline c-animated__child c-animated__child--fade" data-animation-delay="3250">a <a class="c-hero__content-link" href="http://www.threescompany.info/">Threes Company</a></p> -->

                </div>
                <i class="fas fa-chevron-down c-scroll c-animated__child c-animated__child--fade" data-animation-delay="3250"></i>
            </div>
        </header>
    <?php } else { ?>
        <?php
        $style = "";
        if ($backgroundImage) {;
            $style = "style='background-image: url(\"$backgroundImage\")";
        }
        if ($backgroundPosition) {
            $style .= "; background-position: $backgroundPosition'";
        } else {
            $style .= "'";
        }

        ?>
        <header <?php echo $style ?> class="c-hero">
            <?php if ($backgroundImage) { ?>
                <div class="c-hero__mask" <?php if ($overlayColour) echo "style='background: $overlayColour'" ?>>
                <?php } ?>
                <div class="c-hero__content">
                    <h1><?php echo $title ?></h1>
                </div>
                <?php if ($backgroundImage) { ?>
                </div>
            <?php } ?>
        </header>
    <?php } ?>