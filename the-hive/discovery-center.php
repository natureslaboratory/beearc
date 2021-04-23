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
            <section class="col-12 col-md-8 col-lg-6 c-animated c-section">
                <h2>The Mystery of the Honeybee</h2>
                <p>
                    Exploring the Social, Economic and Cultural Meaning of the honey bee and its relation with human beings.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.
                </p>
                <img 
                    src="/resources/beearc_discovery.png" 
                    alt="Bee Arc Discovery Plan" 
                    class="c-image c-animated__child c-animated__child--fade" 
                    data-animation-delay="0"
                    style="border: 1px solid black"
                >
            </section>
        </div>
    </div>

    <div class="c-hive-section">
        <div class="l-block l-block--small l-block--no-top-padding">
            <div class="l-row l-row--centered">
                <section class="c-hive-section col-12 col-lg-8">
                    <h2 class="c-hive-section__title">
                        A Journey Through The Threefold World Of The Honey Bee
                    </h2>
                </section>
            </div>
        </div>
        <div class="c-hive-section__sections">
            <div class="l-block l-block--small l-block--theme">
                <div class="l-row l-row--centered">
                    <section class="c-hive-section col-12 col-lg-8">
                        <div class="c-hive-section__section l-flow">
                            <h3>The Cultural and Spiritual World of the Honey Bee</h3>
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
                </div>
            </div>
            <div class="l-block l-block--small">
                <div class="l-row l-row--centered">
                    <section class="c-hive-section col-12 col-lg-8">
                        <div class="c-hive-section__section l-flow">
                            <h3>The Honey Bees Social and Community World</h3>
                            <p>
                                How the Honey Bee has evolved a form of social organisation in so many ways beyond
                                our own , how it works and how it can help human beings to develop healthier and
                                happier social well-being.
                            </p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="l-block l-block--theme l-block--small">
                <div class="l-row l-row--centered">
                    <section class="c-hive-section col-12 col-lg-8">
                        <div class="c-hive-section__section l-flow">
                            <h3>The Honey Bees Economic and Environmental World</h3>
                            <p>
                                How the Honey Bee has produced a uniquely cooperative way of working for the whole to
                                produce unique foods and medicines for itself and for man. How it lives as an environmental
                                indicator of the health of the earth.
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include("../components/footer.php"); ?>