<h1 class="site-title">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
  </a>
</h1>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>