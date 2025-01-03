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


<?php get_footer(); ?>