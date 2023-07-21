<?php
    function hack_defecen_files() 
        {
             wp_enqueue_script('main-js',get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);  
             wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
             wp_enqueue_style('font-google','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
             wp_enqueue_style('hack_defence_main_styles',get_theme_file_uri('/build/style-index.css'));
             wp_enqueue_style('hack_defence_extra_styles',get_theme_file_uri('/build/index.css'));
         }

     add_action('wp_enqueue_scripts', 'hack_defecen_files');         

    
  function hack_defecen_features() 
         {
            add_theme_support('title-tag');
            register_nav_menu('HeaderMenuLocation', 'Header Manu Location');
            register_nav_menu('FooterLocatiOne', 'Footer Location One');
            register_nav_menu('FooterLocatitwo', 'Footer Location Two');
          }

     add_action('after_setup_theme', 'hack_defecen_features');   
     add_action('pre_get_posts', 'hack_defecen_features');   
     
     
     function custom_theme_setup()
      {
        // Add theme support for featured images
        add_theme_support('post-thumbnails');
    
        // Add additional image sizes if needed
        // add_image_size('custom-size', width, height, true);
     }
 
      add_action('after_setup_theme', 'custom_theme_setup');
  
    