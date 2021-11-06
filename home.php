<?php get_header(); ?>



<!-- Blog post gallery ------------------------------------------------------->
<div class="album text-muted">
  <div class="container">

    <?php if(have_posts()) : ?>
    <div class="row">
    <?php $count = 0; while(have_posts()) : the_post(); ?>
      <div class="col-md-4" >
        <div style="background: #FFF; padding: 10px; height: 540px; position: relative; overflow: hidden;">
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
      </div> <!-- class="col-md-4" -->

      <?php $count++; if ($count % 3 == 0) : ?>
    </div> <!-- class="row" -->
  <br/>
    <div class="row">
      <?php endif; ?>

    <?php endwhile; ?>
    </div> <!-- class="row" -->
    <?php else : ?>
      <p><?php __('Keine Beiträge gefunden'); ?></p>
    <?php endif; ?>

  </div>  <!-- class="container" -->
</div>  <!-- class="album text-muted"> -->



<?php get_footer(); ?>
