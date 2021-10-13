<?php 

//css and js files
function linkFiles(){
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto+Slab&family=Roboto:wght@300&display=swap');
  wp_enqueue_style('fontaweomse', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
  // wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), get_template_directory_uri() . '/style.css');
  wp_enqueue_script( 'main', get_theme_file_uri('/js/main.js' ), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'linkFiles');

//add post thumbnail
function site_init(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support('title-tag');
  add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'site_init');


//Projects Post Type

function site_custom_post_type(){
  register_post_type('projects', 
  array(
    'rewrite' => array('slug' => 'projects'),
    'labels' => array(
      'name' => 'Projects',
      'singular_name' => 'Add New Project',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project'
    ),
    'menu-icon' => 'dashicons-clipboard',
    'public' => true,
    'has_archive' => true,
    'supports' => array(
      'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}

add_action('init','site_custom_post_type')

?>