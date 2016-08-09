<!doctype html>
<html>  
  <head>
    <?php
      //
      // Our Site Definetly Needs a Title
      //
      echo '<title>'; 
      wp_title();
      if(wp_title('', false)){ echo ' :'; }
      bloginfo('name'); 
      echo '</title>';
      
      //
      // And we probably want to include some Meta-Data
      //
      get_template_part( 'includes/content/header', 'meta' );
      wp_head(); ?>    
  </head>
  <body <?php body_class('Layout'); ?>>
    <?php get_template_part( 'includes/content/header', 'content' ); ?>