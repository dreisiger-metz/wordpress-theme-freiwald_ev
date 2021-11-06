<?php get_header(); ?>



<!-- Blog post --------------------------------------------------------------->
<?php if(have_posts()) : ?>
  <?php the_post(); ?>
  <div class="album text-muted">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1" >
          <h1 class="post-heading"><?php the_title(); ?></h1>
          <h4 class="post-meta"><?php the_date(); ?></h4>

          <?php if(has_post_thumbnail()) : ?>
            <div class="post-image">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="post-body">
            <?php the_content(); ?>
          </div>
        </div>

        <!-- Sidebar support, should we want it, would go here -->

      </div> <!-- row -->
    </div> <!-- container -->
  </div>
<?php else : ?>
  <p><?php __('Beitrag nicht gefunden'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
