
    <footer style="-webkit-box-shadow: inset 2px 2px 5px 1px rgba(0,0,0,.08);
    -moz-box-shadow: inset 2px 2px 5px 1px rgba(0,0,0,.08);
    box-shadow: inset 2px 2px 5px 1px rgba(0,0,0,.08);
    background-color: #f2f2f2; padding-bottom: 20px;">


    <div style="width: 100%; text-align: center; padding-top: 40px; padding-bottom: 0px; font-size: 40px;">
      <a target="_blank" href="https://www.facebook.com/freiwald.eV/">
        <i style="padding-left: 10px; padding-right: 10px;" class="fab fa-facebook-square" aria-hidden="true"></i>
      </a>

      <a target="_blank" href="https://www.instagram.com/freiwald_e.v/">
        <i style="padding-left: 10px; padding-right: 10px;" class="fab fa-instagram" aria-hidden="true"></i>
      </a>

      <a target="_blank" href="https://twitter.com/freiwald_eV">
        <i style="padding-left: 10px; padding-right: 10px;" class="fab fa-twitter" aria-hidden="true"></i>
      </a>

      <a target="_blank" href="https://www.youtube.com/channel/UC4U5aYYYOgES_WrRVGTaq0A">
        <i style="padding-left: 10px; padding-right: 10px;" class="fab fa-youtube" aria-hidden="true"></i>
      </a>
    </div>


      <div class="container">
        <?php wp_nav_menu( array(
          'theme_location'  => 'footer',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'navfooter',
          'container_id'    => '',
          'menu_class'      => 'navfootermenu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) ); ?>

        <hr/>

        <p style="margin-bottom: 0px;">
          <center>
            CC BY-NC-SA <?php echo Date('Y'); ?> <?php bloginfo('name'); ?>
          </center>
        </p>
      </div>
    </footer>


    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>


  </body>
</html>
