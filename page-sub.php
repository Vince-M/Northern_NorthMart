<?php
/*
  Template Name: Sub template
*/
?>

<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>

        <!-- HERO
        =================================================== -->
        <section class="hero__section hero__section--fw" role="banner" data-type="background" data-speed="2">
          
          <div class="hero__section--colorBkgd subpage" style="background-color:<?php the_field('background_color'); ?>">
            <h1><?php echo esc_attr( get_field( 'subpage_hero_heading' ) ); ?></h1>
            <h2><?php echo esc_attr( get_field( 'subpage_hero_subheading' ) ); ?></h2>
          </div>

          <div class="hero__text">
            <h1 class="hero__head">
              <?php echo get_field('page_hero_heading' ); ?>
            </h1>
            <h2 class="hero__subhead">
              <?php echo get_field('page_hero_subheading' ); ?>
            </h2>
          </div>
          <?php 
            $image = get_field('sub_hero_image');
            if( !empty( $image ) ): ?>
                <img class="sub_hero_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
          <?php endif; ?>

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


        <?php the_content(); ?>



      </article>
    </main>


<?php get_footer(); ?>