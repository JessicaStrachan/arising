<?php
$post_image = wp_get_attachment_image_src(
  get_post_thumbnail_id(),
  'full'
)[0];
$featured_image = $post_image ?
  'background-image: url(' . $post_image . ');' :
  '';

$review_image_fields = new CMB2Fields(get_the_ID());

$review_image_one = $review_image_fields->field('review_image_one');
$image_one = 'background-image: url(' . $review_image_one . ');' ;

get_header();

if(have_posts()): while(have_posts()): the_post();
?>
<div class="page-wrapper">
  <section class="page--title">
    <h1><?php echo the_title(); ?></h1>
  </section>
  <div class="featured--image" style="<?php echo $featured_image; ?>"></div>
  <article>
    <?php if($content); ?>
    <p><?php echo the_content(); ?></p>
    <section class="post-images grid">
      <a href="<?php echo $review_image_one ?>" style="<?php echo $image_one?>"></a>
    </section>
  </article>
</div>

<?php
endwhile; else:
  echo 'Sorry, no posts matched your criteria';
endif;

get_footer();
