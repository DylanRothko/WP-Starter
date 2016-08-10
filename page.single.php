<?php 
  /* 
  // Template Name: Single Page Parent
  // Lets globalize our post variable so
  // that we can find the menu with the
  // same name
  */
  global $post;
  $post_slug = $post->post_name;  
  $menu_name = $post_slug;
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $menu_name );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );    
  get_header();
  //
  // START SINGLE PAGE MENU ITEM LOOP
  foreach( $menuitems as $item ):
    switch ($item->object) {
      //
      // If this menu item is for a category 
      // we'll put that logic here
      case 'category':
        break;
      //
      // Default logic
      default:
        break;
    }
  //
  // END SINGLE PAGE MENU ITEM LOOP
  endfor;
  get_footer();
?>