<?php
// Register the 'event' custom post type
function hack_defence_post_types() {
  register_post_type('event', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'), // Enable support for title, editor, and excerpt fields
      'rewrite' => array('slug' => 'events'), // Set the URL slug for the 'event' post type
      'has_archive' => true, // Enable archives for 'event' post type
      'public' => true, // Make the 'event' post type publicly accessible
      'labels' => array(
          'name' => 'Events', // The plural name for the 'event' post type
          'add_new_item' => 'Add New Event', // The label for adding a new event
          'edit_item' => 'Edit Event', // The label for editing an event
          'all_items' => 'All Events', // The label for displaying all events
          'singular_name' => 'Event' // The singular name for the 'event' post type
      ),
      'menu_icon' => 'dashicons-calendar' // Set the icon for the 'event' post type in the admin menu
  ));
}

// Hook the 'hack_defence_post_types' function to the 'init' action to register the 'event' post type
add_action('init', 'hack_defence_post_types');

// Register the 'slidebar' custom post type
function post_types_slider() {
  // Register 'slidebar' post type
  register_post_type('slidebar', array(
      'show_in_rest' => true,
      'supports' => array('title', 'thumbnail'), // Enable support for title and featured image (thumbnail)
      'rewrite' => array('slug' => 'Slider', 'editor'), // Set the URL slug for the 'slidebar' post type
      'has_archive' => true, // Enable archives for 'slidebar' post type
      'public' => true, // Make the 'slidebar' post type publicly accessible
      'labels' => array(
          'name' => 'Slider', // The plural name for the 'slidebar' post type
          'singular_name' => 'Slider', // The singular name for the 'slidebar' post type
          'add_new' => 'Add Image', // The label for adding a new image to the slider
          'add_new_item' => 'Add New Image', // The label for adding a new image to the slider
          'menu_name' => 'Slider', // The label for the post type menu
      ),
      'menu_icon' => 'dashicons-image-flip-horizontal', // Set the icon for the 'slidebar' post type in the admin menu
      'template' => array(
          array('core/paragraph', array(
              'placeholder' => 'Add image here...', // The placeholder text for the editor when adding an image
          )),
      ),
  ));
}

// Hook the 'post_types_slider' function to the 'init' action to register the 'slidebar' post type
add_action('init', 'post_types_slider');
