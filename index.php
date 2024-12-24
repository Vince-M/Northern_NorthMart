<?php get_header(); ?>

        <!-- HERO
        =================================================== -->
        <section class="hero__section hero__section--about full-width-split-screen">
          
          <div class="hero__text">
            <h1 class="hero__head">Welcome to Northern/NorthMart</h1>
            <h2 class="hero__subhead"></h2>
          </div>
          <img class="hero__section--image" src="img/hero_about2_1264x896.webp" alt="">
        </section>
        <!-- ============================================== -->

          <!-- CONTENT
        =================================================== -->
        <div class="wrapper">
          <div class="full-width-split-screen content__intro subpage__ncrCol1">

            <div class="wrapper wrapper__singleCol">
            <?php
                  if( have_posts() ):
                    while( have_posts() ) : the_post();
                      ?>

                      <?php get_template_part( 'parts/content' ); ?>

                      <?php
                        endwhile; 
                        the_posts_pagination();
                      ?>
                    <?php   
                      else: 
                    ?>

                    <p>Nothing yet to be displayed!</p>
                    
                <?php
                  endif;
                ?>
            </div>

          </div>

        </div>
        <!-- ============================================== -->

<?php get_footer(); ?>