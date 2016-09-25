<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category Arising
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */
if(file_exists(__DIR__ . '/CMB2/init.php')) {
  require_once __DIR__ . '/CMB2/init.php';
}
function cmb2_exst_metaboxes() {
  $prefix = '_arising_cmb2_';

  $review_image_one = new_cmb2_box([
    'id'            => 'review_image_one',
    'title'         => __('Post Image One', 'cmb2'),
    'object_types'  => ['post'],
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true
  ]);

  $review_image_one->add_field([
    'desc'       => __('Add the first post image', 'cmb2'),
    'id'         => $prefix . 'review_image_one',
    'type'       => 'file'
  ]);
}
add_action('cmb2_init', 'cmb2_arising_metaboxes');
