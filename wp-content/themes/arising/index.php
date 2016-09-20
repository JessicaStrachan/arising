<?php

$loop = new WP_Query( array('post_type' => 'book_review') );

// $args = array ('post_type' => 'book_reviews');
// $loop = new WP_Query( $args );

get_header();
?>

<section class="book-review__listing">

<?php
if(have_posts()): while($loop->have_posts()): $loop->the_post();

$post_image = wp_get_attachment_image_src(
  get_post_thumbnail_id(),
  'full'
)[0];
$featured_image = $post_image ?
  'background-image: url(' . $post_image . ');' :
  '';
?>

<article class="book-review__listing--item">
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
    <div class="listing--image" style="<?php echo $featured_image; ?>"></div>
  </a>
</article>


<?php
endwhile; else:
  echo 'Sorry, no posts matched your criteria';
endif;
?>

</section>

<?php
get_footer();
