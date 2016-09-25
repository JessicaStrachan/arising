<?php

$loop = new WP_Query( array('post_type' => 'book_review') );

// $args = array ('post_type' => 'book_reviews');
// $loop = new WP_Query( $args );

get_header();
?>

<section class="page-wrapper">
  <h2 class="page-title">Book Reviews</h2>

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

  <section class="book-review__listing grid">

  <article class="book-review__listing--item grid_col col-3">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
      <h2 class="author"><?php echo get_the_terms(get_the_ID(), 'author')[0]->name; ?></h2>
      <p class="genre"><?php echo get_the_terms(get_the_ID(), 'genres')[0]->name ?></p>
      <div class="listing--image" style="<?php echo $featured_image; ?>"></div>
      <!-- <?php the_excerpt(); ?> -->
    </a>
  </article>


  <?php
  endwhile; else:
    echo 'Sorry, no posts matched your criteria';
  endif;
  ?>

  </section>
</section>

<?php
get_footer();
