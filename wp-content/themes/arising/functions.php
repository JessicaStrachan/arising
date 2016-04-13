<?php
function style_script_includes() {
  $template_uri = get_template_directory_uri();
  wp_enqueue_script('jquery');
  wp_register_script('respond', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js', '', '1.4.2', true);
  wp_enqueue_script('respond');
  wp_register_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '', '2.8.3', true);
  wp_enqueue_script('modernizr');
  wp_register_script('selectivizr', '//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js', '', '1.0.2', true);
  wp_enqueue_script('selectivizr');
  wp_register_style('theme_style', get_stylesheet_uri());
  wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts', 'style_script_includes');
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form']);
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
function autoload_classes($name) {
  $class_path = get_template_directory() . '/includes/class.' . strtolower($name) . '.php';
  if(file_exists($class_path)) {
    require_once $class_path;
  }
}
spl_autoload_register('autoload_classes');
if(function_exists('__autoload')) {
  spl_autoload_register('__autoload');
}
function add_ie_xua_header() {
  if(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
    header('X-UA-Compatible: IE=edge,chrome=1');
  }
}
add_action('send_headers', 'add_ie_xua_header');
