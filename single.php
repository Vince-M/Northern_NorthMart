<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>

        <!-- HERO
        =================================================== -->
        <section class="hero__section hero__section--healthyHorizons full-width-split-screen">
          
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
            <p><a href="index.html">Home</a> /  <a class="breadcrumb__active">Ways to Save</a></p>
          </div> <!-- breadcrumbs -->
        </div>
        <!-- ============================================== -->

        <!-- CONTENT
        =================================================== -->
        <div class="wrapper wrapper__singleCol">

          <?php
            while( have_posts() ):
              the_post();
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header>
                  <h2><?php the_title(); ?></h2>
                  <div class="meta-info">
                    <p>Posted in <?php echo esc_attr(get_the_date() ); ?></p>
                    <p>Categories: <?php the_category( ' ' ); ?></p>
                    <p>Tags: <?php the_tags( '', ', '); ?></p>
                  </div>
                </header>
                <div class="content">
                  <?php the_content(); ?>
                </div>

              </article>
            <?php endwhile; ?>
            
        </div>

        

      </article>
    </main>


<?php get_footer(); ?>