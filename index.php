<?php 
    include("./components/BeeArcApi.php"); 

    $headerVars = array(
        "title" => "Home",
        "fullHeader" => true,
        "overlayColour" => "rgba(0, 0, 0, 0.37)"
    );
    
    BeeArcApi::include("./components/header.php", $headerVars); 
 ?>
    <main>
        <div class="l-block">
            <div class="l-row l-row--centered">
                <section class="col-12 col-md-5 c-section c-animated">
                    <h2 class="c-section__title c-section__title--centered c-animated__child c-animated__child--fade" data-animation-delay="0">Why the BeeArc</h2>
                    <div class="c-section__content">
                        <p class="c-animated__child c-animated__child--fade" data-animation-delay="750">
                            The catastrophic demise of the honey bee worldwide has awakened millions to the enormous economic impact they have on our lives - to the complex consequences of a world without them
                        </p>
                        <p class="c-animated__child c-animated__child--fade" data-animation-delay="1500">
                            Paradoxically from these fears has emerged a broader understanding - almost a revelation - of the honey bee as a bee – ing with not just economic meaning but with social and community meaning - cultural and spiritual meaning.
                        </p>
                        <p class="c-animated__child c-animated__child--fade" data-animation-delay="2250">
                            The BeeArc Project explores how the honey bee can inspire human beings in all three realms of life.
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="l-block l-block--light-grey">
            <div class="l-row l-row--centered">
                <section class="col-12 col-md-8 col-lg-12 c-animated c-section">
                    <h2 style="max-width: none" class="c-animated__child c-animated__child--fade c-section__title c-section__title--centered">The Three Dimensions of the BeeArc</h2>
                    <div class="c-section__content c-image-text">
                        <img src="/resources/beearc_full_building.png" alt="Bee Arc Building Plan" class="c-image-text__image c-animated__child c-animated__child--fade" data-animation-delay="0">
                        <div class="c-image-text__text c-beearc-sections">
                            <div class="c-animated__child c-animated__child--fade-right c-beearc-section" data-animation-delay="750">
                                <a href="/the-hive/discovery-center"><h3 class="c-beearc-section__title">The Discovery Center</h3></a>
                                <h6 class="c-beearc-section__sub-title">The Mystery of the Honeybee</h6>
                                <p class="c-beearc-section__paragraph">
                                    Exploring the Social, Economic and Cultural Meaning of the honey bee and its relation with human beings. 
                                </p>
                            </div>
    
                            <div class="c-animated__child c-animated__child--fade-right c-beearc-section" data-animation-delay="1500">
                                <a href="/the-hive/research-center"><h3 class="c-beearc-section__title">The Research Center</h3></a>
                                <h6 class="c-beearc-section__sub-title">The College of Future Living</h6>
                                <p class="c-beearc-section__paragraph">
                                    A College of Future Living exploring ways in which the honey bee can inspire social, economic and cultural renewal.
                                </p>
                            </div>
    
                            <div class="c-animated__child c-animated__child--fade-right c-beearc-section" data-animation-delay="2250">
                                <a href="/the-hive/sustainable-community"><h3 class="c-beearc-section__title">The Honeybee Village</h3></a>
                                <h6 class="c-beearc-section__sub-title">A Model of Small Scale Sustainable Community</h6>
                                <p class="c-beearc-section__paragraph">
                                    A Living and Working space which can embody sustainable approaches to living together, working together and growing together inspired by the honey bee.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include("./components/footer.php"); ?>