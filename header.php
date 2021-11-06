<html lang="<?php language_attributes(); ?>">



  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="https://freiwald-ev.de/" />
    <!-- <meta property="og:locale" content="de_DE" /> -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:site_name" content="Freiwald e.V." />

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154922329-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-154922329-1');
    </script>

    <?php wp_head(); ?>
  </head>



  <body>
    <!-- Navbar ---------------------------------------------------------------->
    <div style="background: #24292e;">
      <nav class="navbar navbar-expand-md navbar-dark bg-faded">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                       aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-nav mr-auto" id="navbar-collapse-1">
          <?php wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) ); ?>

          <a style="margin-right: 15px;" href="/spenden">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button"><i class="fa fa-heart" aria-hidden="true"></i> Spenden</button>
          </a>

          <!-- the 'language_chooser' menu walker could go here -->
        </div>
      </nav>
    </div>
