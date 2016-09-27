<?php
function style_script_includes() {
  $template_uri = get_template_directory_uri();
  var_dump($template_uri);
  wp_enqueue_script('jquery');
  wp_register_script('respond', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js', '', '1.4.2', true);
  wp_enqueue_script('respond');
  wp_register_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '', '2.8.3', true);
  wp_enqueue_script('modernizr');
  wp_register_script('selectivizr', '//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js', '', '1.0.2', true);
  wp_enqueue_script('selectivizr');
  wp_register_script('menu', $template_uri . '/js/menu.js', '', '', true);
  wp_enqueue_script('menu');
  wp_register_style('theme_style', get_stylesheet_uri());
  wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts', 'style_script_includes');
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form']);
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

register_nav_menus([
  'main_nav' => 'Main navigation menu - located in the header',
  'footer-nav' => 'Footer navigation menu - located in the footer'
]);

function autoload_classes($name) {
  $template_directory = get_template_directory();

   $class_name = strtolower(
     implode(
       '-',
       preg_split('/(?=[A-Z])/', $name, -1, PREG_SPLIT_NO_EMPTY)
     )
   );

   $class_path = $template_directory . '/includes/class.'
                 . $class_name . '.php';
  if(file_exists($class_path)) {
    require_once $class_path;
  }

  $lib_class_name = $template_directory . '/includes/class.'
                    . strtolower($name) . '.php';

  if(file_exists($lib_class_name)) require_once($lib_class_name);
}

spl_autoload_register('autoload_classes');
if(function_exists('__autoload')) {
  spl_autoload_register('__autoload');
}

function include_additional_files() {
  $template_url = get_template_directory();
  if(is_admin()) {
    require_once $template_url . '/includes/cmb2-custom-metaboxes.php';
    require_once $template_url . '/includes/class.arising_admin.php';
  }
}
add_action('init', 'include_additional_files', 1);

function add_ie_xua_header() {
  if(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
    header('X-UA-Compatible: IE=edge,chrome=1');
  }
}
add_action('send_headers', 'add_ie_xua_header');
