<?php get_header(); ?>



<!-- Jumbotron --------------------------------------------------------------->
<section class="jumbotron text-center" style="background: #24292e; border-radius: 0px;">
  <div class="container">
    <div class="row">
      <!-- Main text -->
      <div class="col-md-7" style="text-align: left;">
        <h1><?php bloginfo('name'); ?></h1>
        <p style="color: #FFF; font-size: 25px;">
          <?php bloginfo('description'); ?>
        </p>

        <a style="margin-top: 15px; margin-bottom: 15px;" href="<?php echo get_theme_mod('frontpage_moreinfo_link', '/ueber-uns'); ?>" class="btn btn-primary"><?php echo get_theme_mod('frontpage_moreinfo_text', 'Über uns'); ?></a>
      </div>

      <div class="col-md-1"></div>

      <!-- Main buttons -->
      <div class="col-md-4">
        <div class="row" style="margin-top: 15px;">
          <?php if(is_active_sidebar('jumbotron_button_1')) : ?>
            <?php dynamic_sidebar('jumbotron_button_1'); ?>
          <?php endif; ?>

          <?php if(is_active_sidebar('jumbotron_button_2')) : ?>
            <?php dynamic_sidebar('jumbotron_button_2'); ?>
          <?php endif; ?>
        </div>

        <div class="row" style="margin-top: 30px;">
          <?php if(is_active_sidebar('jumbotron_button_3')) : ?>
            <?php dynamic_sidebar('jumbotron_button_3'); ?>
          <?php endif; ?>

          <?php if(is_active_sidebar('jumbotron_button_4')) : ?>
            <?php dynamic_sidebar('jumbotron_button_4'); ?>
          <?php endif; ?>
        </div>
      </div> <!-- class="col-md-4" / Main buttons -->
    </div> <!-- class="row" -->
  </div> <!-- class="container" -->
</section> <!-- class="jumbotron -->



<!-- Blog post gallery ------------------------------------------------------->
<!-- Limit to last three posts == obviously needs to be tidied up -->
<?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3));?>
<?php if($the_query->have_posts()) : ?>
  <section class="album text-muted">
    <div class="container">
      <div class="row">

        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-md-4" >
            <div style="background: #FFF; height: 540px; position: relative;">
              <div style="background: #FFF; padding: 10px; height: 520px; position: relative; overflow: hidden;">
                <p style="margin-bottom: 10px; font-size: 14px;"><?php the_date(); ?></p>
                <a href="<?php the_permalink(); ?>">
                  <h2 class="post-title"><?php the_title(); ?></h2>
                </a>
    
                <?php if(has_post_thumbnail()) : ?>
                  <div class="post-image">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  </div>
                <?php endif; ?>

                <div class="post-teaser" style="padding-top: 10px;">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          </div> <!-- class="col-md-4" -->
        <?php endwhile; ?>
        <!-- is this necessary? -->
        <?php wp_reset_postdata(); ?>


        <!-- Link to the posts 'homepage' -->
        <div style="width: 100%; text-align: center;">
          <a style="margin-top: 50px; margin-bottom: 15px;" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-primary">Alle Beiträge</a>
        </div>
      </div>
    </div>
  </section> <!-- Blog post gallery -->
<?php endif; ?>



<!-- Post-blog 'Other Text' region ------------------------------------------->
<?php if(is_active_sidebar('frontpage_other')) : ?>
  <section class="frontpage-othertext">
  <?php dynamic_sidebar('frontpage_other'); ?>
  </section>
<?php endif; ?>



<?php get_footer(); ?>
