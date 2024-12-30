<?php get_header(); ?>

        <!-- HERO
        =================================================== -->
        <section class="full-width-split-screen hero__section--index">
          <div class="hero__section--intro">
            <h1 class="hero__index">
              <?php echo get_field('index_hero_heading' ); ?>
            </h1>
          </div>
          <!-- <img class="hero__section--image" src="img/ncr_hero_1600x944.jpg" alt=""> -->
          <?php 
            $image = get_field('index_hero_image');
            if( !empty( $image ) ): ?>
                <img class="hero__section--image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
            <?php endif; ?>
        </section>
        <!-- ============================================== -->

        <?php the_content(); ?>

        <!-- SAVING PROMO
        =================================================== -->
        <section class="inStore__promo">
          <div class="wrapper priceDropBanner">
            <img class="pdBanner" src="img/priceDrop_banner.svg" alt="">
            <img  class="saveMore" src="img/priceDrop_helpingYouSaveMore.svg" alt="">
          </div>
        </section>
        <!-- ============================================== -->

        <!-- RECIPE
        =================================================== -->
        <section class="wrapper indexRecipes">
          <div class="indexRecipe__image">
            <img src="img/recipe_koreanBeef_1232x400.jpg" alt="plate of Korean Beef with Brocolli and Beef with Sesame Seeds" width="1280" height="400">
          </div>
          <div class="indexRecipe__textBlock">
            <p class="indexRecipe__head">recipe</p>
            <h2 class="indexRecipe__title">Korean Beef and Broccoli</h2>
            <p class="indexRecipe__description">Serve this saucy meat dish over rice and broccoli.</p>
            <p class="indexRecipe__link"><a href="#">view recipe &#10095;</a></p>
          </div>
        </section>
        <!-- ============================================== -->

        <!-- ADVOCACY
        =================================================== -->
        <section class="advocacy full-width-split-screen">
          <!-- <figure class="advocacy__index--img">
            <img src="img/index_advocay_960x480.jpg" alt="Advocacy and Awareness" width="960" height="480">
          </figure> -->

          <img src="img/index_advocay_960x480.jpg" alt="Advocacy and Awareness" width="960" height="480">

          <div class="advocacy__text">
            <h2>Advocacy and Awareness</h2>
            <h3>Orange Shirt Day</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            <div class="btn btn__advocacy">
              Learn More
            </div>
          </div>

        </section>
        <!-- ============================================== -->

        <!-- SITE CARDS
        =================================================== -->
        <section class="wrapper site__cards">
          <div class="col1">
            <img class="site__img" src="img/cards-hhf_1280x672.jpg" alt="Healthy Horizons Foundation" width="640" height="336">
            <div class="site__text">
              <p><span class="site__text--callout">The Healthy Horizons Foundation</span> is dedicated to improving the health and well-being of youth in the communities we serve through financial support and the motivation to advance their level of fitness, education, and health.</p>

              <p>Your generosity will play an important role in our efforts to give youth in our communities a brighter and healthier future! <a class="hhf__textLink" href="healthyHorizons.html">[ View HHF ]</a> </p>
              <a href="healthyHorizons.html"><div class="btn btn__primary">
                HHF Learn More
              </div></a>
            </div>
          </div>
          <div class="col2">
            <img class="site__img"  src="img/cards-weFinancial_1280x672.jpg" alt="We Financial" width="640" height="336">
            <div class="site__text">
              <p>What does <span class="site__text--callout">We</span> mean? It's so simple, and yet it means so much. <span class="site__text--callout">We</span> reflects our dedication and connection to the community, has a sense of shared ownership with the customer, and is friendly and human.</p>

              <ul class="we__cardList">
                <li>You can use it for online shopping, and reserving airline tickets and hotels.</li>
                <li>You can sign up for email alerts to notify you when your card has been loaded or when your balance is getting low.</li>
                <li>You can get your balance online for free.</li>
              </ul>
              <a href="weFinancial.html"><div class="btn btn__we">
                Visit We Financial
              </div></a>
            </div>
          </div>
        </section>
        <!-- ============================================== -->

<?php get_footer(); ?>