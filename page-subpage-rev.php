<?php
/*
  Template Name: Subpage-rev template
*/
?>

<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>

        <!-- HERO
        =================================================== -->
        <section class="hero__section hero__section--fw" role="banner" data-type="background" data-speed="2" 
          style="background-image: url('<?php echo get_field('subpage_bkgd_image')['url']; ?>')">

          
          <div class="hero__section--colorBkgd" style="background-color:<?php the_field('background_color'); ?>">
            <h1 class="subpage_hero_head_rev"><?php echo esc_attr( get_field( 'subpage_hero_rev' ) ); ?></h1>
            <h2 class="subpage_hero_head_rev"><?php echo esc_attr( get_field( 'subpage_hero_subhead_rev' ) ); ?></h2>
          </div>
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