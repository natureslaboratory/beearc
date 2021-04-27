<?php include("./components/BeeArcApi.php"); ?>

<?php

    $headerVars = array(
        "title" => "The BeeArc Building",
        "fullHeader" => false,
        "backgroundImage" => "/resources/carolien-van-oijen-SmJH91bGepk-unsplash_1080.jpg",
        "backgroundPosition" => "80% 65%",
        "overlayColour" => "rgba(0, 0, 0, 0.15"
    )

?>

<?php BeeArcApi::include("./components/header.php", $headerVars); ?>

<main>
    <div class="l-block l-block--small">
        <div class="l-row">
            
        </div>
    </div>

</main>


<?php include("./components/footer.php"); ?>