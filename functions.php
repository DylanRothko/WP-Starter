<?php  // Functions File 
  
  //
  // First we want to enque all of our assets!
  // Add Vendor Files and Compiled code from /dist/
  // directory below using WordPress wp_register_style() / 
  // wp_register_script()
  //
  function enque_assets(){
    
  }
  
  //
  // Add Init Hooks for custom WordPress Callbacks
  //
  add_action('wp_enqueue_scripts', 'enque_assets'); // INIT ASSETS