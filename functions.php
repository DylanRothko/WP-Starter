<?php  
  //
  // Functions File 
  // Declare any global variables up top. 
  //
  $assetVersion = '0.0.1';
  
  // 
  // WordPress Provides a Lot of functionality,
  // but we have to remember to enque it.
  //
  if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1024, '', true); // Large Thumbnail
    add_image_size('medium', 960, '', true); // Medium Thumbnail
    add_image_size('small', 720, '', true); // Small Thumbnail
    add_image_size('x-small', 510, '', true); // XSmall Thumbnail
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    // Localisation Support
    load_theme_textdomain('WordPress-Starter-Theme', get_template_directory() . '/languages');
  }  
  
  //
  // We definetly want to enque all of our assets!
  // Add Vendor Files and Compiled code from /dist/
  // directory below using WordPress wp_register_style() / 
  // wp_register_script()
  //
  function enque_assets(){
	  wp_enqueue_style( 'manifest', get_stylesheet_uri() );
	  wp_enqueue_style( 'styling', get_template_directory_uri() . "/dist/app.min.css", array(), $assetVersion);
	  wp_enqueue_script( 'scripts', get_template_directory_uri() . "/dist/app.min.js", array(), $assetVersion, true);    
  }

  //
  // Next, lets make sure we have a menu
  // for our main navigation and another
  // for our footer
  //
  function init_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  } 

  //
  // We also probably want at least
  // one sidebar, so lets register it now
  //
  function init_sidebar() {
    $args = array(
    	'name'          => 'Sidebar',
    	'id'            => "sidebar",
    	'description'   => '',
    	'class'         => '',
    	'before_widget' => '<li id="%1$s" class="widget %2$s">',
    	'after_widget'  => "</li>\n",
    	'before_title'  => '<h2 class="widget-title">',
    	'after_title'   => "</h2>\n"
    );
    register_sidebar( $args );
  }  
  
  //
  // Add Init Hooks for custom WordPress Callbacks
  //
  add_action('wp_enqueue_scripts', 'enque_assets'); // INIT ASSETS
  add_action( 'init', 'init_menus' ); // INIT MENU'S
  add_action('init', 'init_sidebar'); // INIT SIDEBAR
