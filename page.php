<?php get_header(); ?>


<?php if(have_posts()) : ?>
<?php the_post(); ?>

  <!-- Jumbotron --------------------------------------------------------------->
  <section class="jumbotron text-center" style="background: #24292e; border-radius: 0px; margin-bottom: 0px;">
    <div class="container">
      <div class="row">
        <!-- Main text -->
        <div class="col-md-7" style="text-align: left;">
          <h1><?php the_title(); ?></h1>
          <?php $jumbotron_values = get_post_custom_values('fftt_jumbotron'); ?>
          <?php if (!is_null($jumbotron_values)) : ?>
            <?php echo $jumbotron_values[0]; ?>
          <?php endif; ?>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-4">
          <?php if (count($jumbotron_values) > 1) : ?>
            <?php echo $jumbotron_values[1]; ?>
          <?php endif; ?>
        </div>
      </div> <!-- class="row" -->
    </div> <!-- class="container" -->
  </section> <!-- class="jumbotron -->




  <!-- Blog post --------------------------------------------------------------->
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-image" style="padding-top: 0px;">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <div class="album text-muted"> <!-- style="background: #1d1d1d;"> -->
    <div class="container"> <!-- style="background: #FFF; padding-bottom: 30px;"> -->
      <div class="row">
        <div class="col-md-10 offset-md-1" >

          <div class="post-body">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php else : ?>
  <p><?php __('Seite nicht gefunden'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
