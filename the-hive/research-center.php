<?php include("../components/BeeArcApi.php"); ?>

<?php

    $headerVars = array(
        "title" => "The Research Center",
        "fullHeader" => false,
        "backgroundImage" => "/resources/mauro-tandoi-e1B8G8xEW5A-unsplash_cropped.jpg",
        "backgroundPosition" => "50% 25%",
        "overlayColour" => "rgba(0, 0, 0, 0.2)"
    )

?>

<?php BeeArcApi::include("../components/header.php", $headerVars); ?>

<main>
    <div class="l-block l-block--small">
        <div class="l-row l-row--centered">
            <section class="col-12 col-md-12 col-lg-12 c-animated c-image-text">
                <div class="c-image-text__text l-flow">
                    <h2 class="c-h2 c-h2--secondary c-animated__child c-animated__child--fade" data-animation-delay="100">The College of Future Living</h2>
                    <p  class="c-animated__child c-animated__child--fade" data-animation-delay="700">
                        The College of Future Living is an open, living educational and  research exploration of the ways in which the 
                        honey bee can inform, guide and support human activity  socially, economically and culturally at a time of immense 
                        cultural change.
                    </p>
                    <p class="c-animated__child c-animated__child--fade" data-animation-delay="700">
                        The centre will contain 100 seat theatre/conference/exhibition space  along with practical and active learning 
                        spaces.
                    </p>
                </div>
                <img 
                    src="/resources/beearc_college.png" 
                    alt="Bee Arc College" 
                    class="c-image c-animated__child c-animated__child--fade c-image-text__image" 
                    data-animation-delay="1300"
                    style="border: 1px solid #e8e8e8"
                >
            </section>
        </div>
    </div>

    <div class="c-hive-section">
        <!-- <div class="l-block l-block--small l-block--no-top-padding">
            <div class="l-row l-row--centered">
                <section class="c-hive-section col-12 col-lg-12">
                    <h2 class="c-hive-section__title c-animated c-animated--fade" data-animation-delay="0">
                        A Journey Through The Threefold World Of The Honey Bee
                    </h2>
                </section>
            </div>
        </div> -->
        <div class="c-hive-section__sections">
            <div class="l-block l-block--small l-block--secondary">
                <div class="l-row l-row--centered">
                    <section class="c-hive-section col-12 col-sm-8 col-md-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-left">
                            <h3 class="c-h3">Where do the  Cultural and Spiritual Worlds of Man and Honey Bee meet?</h3>
                            <ul>
                                <li>The Egyptian Mystery Centres – the Logos Mysteries  and the honey bee</li>
                                <li>The meaning of the honey at the Mystery Centre of Ephesus - Artemis and Honey bees</li>
                                <li>Western Initiation through the Honey Bee</li>
                                <li>The Sarmoun Darq - The Brotherhood of the Bees</li>
                                <li>Modern experience and understanding of the Honey bee</li>
                                <li>Creation of Theatre , Exhibition and Performance Centre</li>
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
                                    "type" => "secondary", 
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
                    <section class="c-hive-section col-12 col-sm-8 col-md-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-right">
                            <h3 class="c-h3 c-h3--secondary">Where do the Social and Community Worlds of Man and the Honey Bee meet?</h3>
                            <ul>
                                <li>How bees have evolved</li>
                                <li>Understanding the ways bees live</li>
                                <li>The relationship of bees to the Sun</li>
                                <li>Sustainable Beekeeping methods - Warre Hives, Sun Hives, etc.</li>
                            </ul>
                            <p>How human beings may learn socially from the honey bee:</p>
                            <ul>
                                <li>A School of Unselfishness</li>
                                <li>Exploration of new forms of community living</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="l-block l-block--secondary l-block--small">
                <div class="l-row l-row--centered">
                    <section class="c-hive-section col-12 col-sm-8 col-md-6">
                        <div class="c-hive-section__section l-flow c-animated c-animated--fade-left">
                            <h3 class="c-h3">Where do the Economic and Environmental Worlds of Man and the Honey Bee meet?</h3>
                            <ul>
                                <li>The role of the Honey Bee in Food Production</li>
                                <li>Medicines from the Honey Bee</li>
                                <li>The real cost of commercialisation of the honey bee</li>
                                <li>New ways of keeping bees</li>
                            </ul>
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