<?php
/**
* Template Name: Home page
*/
get_header();

if( have_posts()): while( have_posts()): the_post();
$front_page_fields = new CMB2Fields(get_the_ID());

$front_page_fields->render('templates/on-this-day-tpl.php');

$front_page_fields->render('templates/categories-tpl.php');

endwhile; endif;
get_footer();
