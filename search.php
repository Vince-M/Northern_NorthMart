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



    <!-- CONTENT
    =================================================== -->
    <div class="wrapper wrapper__singleCol">


    <h2 class="section-header">Search results for: <?php echo get_search_query(); ?></h2>

              <?php
                get_search_form(); 

                while( have_posts() ) : the_post();
              ?>


            <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

              <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if( 'post' == get_post_type() ): ?>
                <div class="meta-info">
                  <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                  <p>Categories: <?php the_category( ' ' ); ?></p>
                  <p>Tags: <?php the_tags( '', '. '); ?></p>
                </div>
                <?php endif; ?>
              </header>
                
              <div class="content">
                  <?php the_excerpt(); ?>
              </div>
            </article>
            
            <?php
              endwhile;
              the_posts_pagination();
            ?>

    </div>
    <!-- ============================================== -->

  </article>
</main>



<?php get_footer(); ?>