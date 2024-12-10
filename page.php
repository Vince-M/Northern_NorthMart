<?php get_header(); ?>

    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
    <article>

      <!-- HERO
      =================================================== -->
      <section class="hero__section hero__section--community full-width-split-screen">
        
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
        <img class="hero__section--image" src="img/hero_community_1264x896.jpg" alt="">
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

    </article>
    </main>


<?php get_footer(); ?>