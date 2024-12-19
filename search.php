<?php
/*
  Template Name: Search template
*/
?>

<?php get_header(); ?>

<main id='main' class='site-content main' role='main'>
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
      </div>
      <?php 
        $image = get_field('page_hero_image');
        if( !empty( $image ) ): ?>
            <img class="page_hero_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
      <?php endif; ?>
    </section>
    <!-- ============================================== -->

    <!-- BREADCRUMB
    =================================================== -->
    <div class="wrapper breadcrumb__section">
      <div class="breadcrumb container row">
        <p><a href="index.html">Home</a> /  <a class="breadcrumb__active">Ways to Save</a></p>
      </div> <!-- breadcrumbs -->
    </div>
    <!-- ============================================== -->

    <!-- CONTENT
    =================================================== -->
    <div class="wrapper wrapper__singleCol">


    <h2>Search results for: <?php echo get_search_query(); ?></h2>

            <?php 
              get_search_form();

              while( have_posts() ):
                  the_post();
            ?>

            <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                
              <div class="content">
                  <?php the_excerpt(); ?>
              </div>
            </article>
            
            <?php
              endwhile;
            ?>

    </div>
    <!-- ============================================== -->

  </article>
</main>



<?php get_footer(); ?>