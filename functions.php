<?php
/**
 * sitework functions and definitions
 *
 * @package sitework
 */

function change_wp_search_size($query) 
{
if ( $query->is_search ) // Make sure it is a search page
    $query->query_vars['posts_per_page'] = -1; // Change 10 to the number of posts you would like to show

return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter

add_theme_support( 'post-thumbnails' ); 


// voeg categorieen toe aan pagina's
function add_cat() 
{  
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  
}

add_action( 'init', 'add_cat' );


function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }
   
  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    return $content;
  }

  if( function_exists('acf_add_options_page') ) 
  {
    acf_add_options_page();     
  }

// include 'functions/jquery.php';
include 'functions/customscripts.php';
include 'functions/menu.php';
include 'functions/customlogin.php';
include 'functions/custom-shortcodes.php';
include 'functions/custom-gutenberg-blocks.php';
include 'functions/remove-coments.php';

