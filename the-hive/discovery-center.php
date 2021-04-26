<?php include("../components/BeeArcApi.php"); ?>

<?php

$headerVars = array(
    "title" => "The Discovery Center",
    "fullHeader" => false,
    "backgroundImage" => "/resources/sara-kurfess-H1rAeZ1Raww-unsplash_1080.jpg",
    "backgroundPosition" => "50% 25%",
    "overlayColour" => "linear-gradient(180deg, rgb(0, 0, 0, 0.2), transparent)"
)

?>

<?php BeeArcApi::include("../components/header.php", $headerVars); ?>

<main>
    <div class="l-block l-block--small">
        <div class="l-row l-row--centered">
            <section class="col-12 col-md-12 col-lg-12 c-animated c-image-text">
                <div class="c-image-text__text l-flow">
                <h2 class="c-h2 c-h2--theme c-animated__child c-animated__child--fade" data-animation-delay="100">The Mystery of the Honeybee</h2>
                <p  class="c-animated__child c-animated__child--fade" data-animation-delay="700">
                    Exploring the Social, Economic and Cultural Meaning of the honey bee and its relation with human beings.
                </p>
                <p  class="c-animated__child c-animated__child--fade" data-animation-delay="700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.
                </p>
                </div>
                <img 
                    src="/resources/beearc_discovery.png" 
                    alt="Bee Arc Discovery Plan" 
                    class="c-image c-animated__child c-animated__child--fade c-image-text__image" 
                    data-animation-delay="1300"
                    style="border: 1px solid black"
                >
            </section>
        </div>
    </div>

    <div class="c-hive-section">
        <div class="l-block l-block--small l-block--no-top-padding">
            <div class="l-row l-row--centered">
                <section class="c-hive-section col-12 col-lg-12">
                    <h2 class="c-hive-section__title c-animated c-animated--fade" data-animation-delay="0">
                        A Journey Through The Threefold World Of The Honey Bee
                    </h2>
                </section>
            </div>
        </div>
        <div class="c-hive-section__sections">
            <div class="l-block l-block--small l-block--theme">
                <div class="l-row">
                    <section class="c-hive-section col-12 col-md-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-left">
                            <h3 class="c-h3">The Cultural and Spiritual World of the Honey Bee</h3>
                            <p>
                                An Exploration of how the Honey Bee has accompanied man from the beginning as a
                                symbol of higher knowledge and learning, how it has guided and informed him on his
                                evolutionary journey and continues to inform him to the present time
                            </p>
                            <ul>
                                <li>The Egyptian Mystery Centres and the honey bee</li>
                                <li>The Mystery Centre of Ephesus - Artemis and Honey bees</li>
                                <li>Western Initiation through the Logos Mysteries</li>
                                <li>The Sarmoun Darq - The Brotherhood of the Bees</li>
                                <li>Islam and the honey bee</li>
                            </ul>
                        </div>
                    </section>
                    <div class="col-12 col-md-6 c-accent-hex" style="position: relative;">
                        <?php 
                            BeeArcApi::include("../components/beearc_3_hexes.php", 
                                [
                                    "type" => "white", 
                                    "style" => [
                                        "top" => "0px", 
                                        "right" => "0px",
                                        "width" => "60%",
                                        "height" => "auto"
                                    ]
                                ]
                            );
                        ?>
                    </div>
                </div>
            </div>
            <div class="l-block l-block--small">
                <div class="l-row l-row--centered">
                    <div class="col-12 col-md-6 c-accent-hex" style="position: relative;">
                        <?php 
                            BeeArcApi::include("../components/beearc_2_hexes.php", 
                                [
                                    "type" => "theme", 
                                    "style" => [
                                        "top" => "-100px", 
                                        "left" => "-40%",
                                        "width" => "80%",
                                        "height" => "auto"
                                    ]
                                ]
                            );
                        ?>
                    </div>
                    <section class="c-hive-section col-12 col-lg-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-right">
                            <h3 class="c-h3 c-h3--theme">The Social and Community World of the Honey Bee</h3>
                            <p>
                                How the Honey Bee has evolved a form of social organisation in so many ways beyond
                                our own, how it works and how it can help human beings to develop healthier and
                                happier social well-being.
                            </p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="l-block l-block--theme l-block--small">
                <div class="l-row">
                    <section class="c-hive-section col-12 col-lg-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-left">
                            <h3 class="c-h3">The Economic and Environmental World of the Honey Bee</h3>
                            <p>
                                How the Honey Bee has produced a uniquely cooperative way of working for the whole to
                                produce unique foods and medicines for itself and for man. How it lives as an environmental
                                indicator of the health of the earth.
                            </p>
                        </div>
                    </section>
                    <div class="col-12 col-md-6 c-accent-hex" style="position: relative;">
                        <?php 
                            BeeArcApi::include("../components/beearc_2_hexes.php", 
                                [
                                    "type" => "white", 
                                    "style" => [
                                        "bottom" => "-70%", 
                                        "right" => "-200px",
                                        "width" => "40%",
                                        "height" => "auto",
                                        "transform" => "rotate(120deg)"
                                    ]
                                ]
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include("../components/footer.php"); ?>