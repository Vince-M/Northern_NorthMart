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
    <section class="hero__section hero__section--fw search__hero" role="banner" data-type="background" data-speed="2" 
      style="background-image: url('<?php echo get_field('subpage_bkgd_image')['url']; ?>')">
      
      <div class="hero__section--colorBkgd subpage" style="background-color:<?php the_field('background_color'); ?>">
        <h1><?php echo esc_attr( get_field( 'subpage_hero_heading' ) ); ?></h1>
        <h2><?php echo esc_attr( get_field( 'subpage_hero_subheading' ) ); ?></h2>
      </div>
    </section>
    <!-- ============================================== -->

    <!-- CONTENT
    =================================================== -->
    <div class="wrapper wrapper__singleCol search__hero">


    <h1 class="section-header search__header">Search results for: <?php echo get_search_query(); ?></h1>


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