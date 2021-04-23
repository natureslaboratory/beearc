<?php 
    include("./components/BeeArcApi.php"); 

    $headerVars = array(
        "title" => "Home",
        "fullHeader" => true
    );
    
    BeeArcApi::include("./components/header.php", $headerVars); 
 ?>
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
                            How we can support the Honey Bees Cultural and Spiritual Health?<br />
                            How the Honey Bee can support our Cultural and Spiritual health?
                        </p>

                        <h4 class="c-animated__child c-animated__child--fade-right" data-animation-delay="400">Social and Community Health</h4>
                        <p class="c-animated__child c-animated__child--fade-right" data-animation-delay="400">
                            How we can support the Honey Bees Social and Community health?<br />
                            How the Honey Bee can support our Social and Community health?
                        </p>

                        <h4 class="c-animated__child c-animated__child--fade-right" data-animation-delay="600">Economic and Environmental Health</h4>
                        <p class="c-animated__child c-animated__child--fade-right" data-animation-delay="600">
                            How we can support the Honey Bees Economic and Environmental health?<br />
                            How the Honey Bee can support our Economic and Environmental health?
                        <p>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include("./components/footer.php"); ?>