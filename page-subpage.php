<?php
/*
  Template Name: Subpage template
*/
?>

<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>

        <!-- HERO
        =================================================== -->


        <section class="hero__section hero__section--fw " role="banner">
          <div class="">
            <h1><?php echo esc_attr( get_field( 'subpage_hero_heading' ) ); ?></h1>
            <h2><?php echo esc_attr( get_field( 'subpage_hero_subheading' ) ); ?></h2>
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