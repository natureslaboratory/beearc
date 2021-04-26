<?php include("../components/BeeArcApi.php"); ?>

<?php

    $headerVars = array(
        "title" => "The Honeybee Village",
        "fullHeader" => false,
        "backgroundImage" => "/resources/luke-schobert-6Ppj8dvrv6g-unsplash_1080.jpg",
        "backgroundPosition" => "50% 40%",
        "overlayColour" => "linear-gradient(180deg, rgb(0, 0, 0, 0.2), transparent)"
    )

?>

<?php BeeArcApi::include("../components/header.php", $headerVars); ?>

<main>
    <div class="l-block l-block--small">
        <div class="l-row l-row--centered">
            <div class="l-flow">
                <h2 class="c-h2 c-h2--theme">
                    The BeeArc Sustainable Community
                </h2>
                <p>
                    Developing a model of cooperative Work and Living practice.
                </p>
                <ul>
                    <li>Accommodation for shared living</li>
                    <li>Community run Village Store</li>
                    <li>Community Produce Exchange</li>
                    <li>Community run small scale sustainable workshops</li>
                    <li>Community run Garden and Physic Garden</li>
                    <li>Community run Beekeeping</li>
                    <li>Community run complementary health  clinic</li>
                    <li>Community run transport</li>
                </ul>
            </div>
        </div>
    </div>

</main>


<?php include("../components/footer.php"); ?>