<?php
/*
  Template Name: About template
*/
?>

<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>

        <!-- HERO
        =================================================== -->
        <section class="hero__section hero__section--about full-width-split-screen">
          
          <div class="hero__text">
            <h1 class="hero__head">
              <?php echo get_field('page_hero_heading' ); ?>
            </h1>
            <h2 class="hero__subhead">
            <?php echo get_field('page_hero_subheading' ); ?>
            </h2>
            <!-- <h1 class="hero__head">Community</h1> -->
            <!-- <h2 class="hero__subhead">Making a difference in the communities we serve</h2> -->
          </div>
          <?php 
            $image = get_field('page_hero_image');
            if( !empty( $image ) ): ?>
                <img class="page_hero_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
          <?php endif; ?>
          <!-- <img class="hero__section--image" src="img/hero_community_1264x896.jpg" alt=""> -->
        </section>
        <!-- ============================================== -->

        <!-- BREADCRUMB
        =================================================== -->
        <div class="wrapper breadcrumb__section">
          <div class="breadcrumb container row">

              <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
              ?>

          </div> <!-- breadcrumbs -->
        </div>
        <!-- ============================================== -->

        <!-- CONTENT
        =================================================== -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>

        <p>Sorry, no pages found</p>

        <?php endif; ?>

      </article>
    </main>


<?php get_footer(); ?>