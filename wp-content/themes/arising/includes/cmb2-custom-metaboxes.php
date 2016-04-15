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
}
add_action('cmb2_init', 'cmb2_arising_metaboxes');
