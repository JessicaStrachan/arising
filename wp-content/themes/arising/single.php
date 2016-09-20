<?php
$post_image = wp_get_attachment_image_src(
  get_post_thumbnail_id(),
  'full'
)[0];
$featured_image = $post_image ?
  'background-image: url(' . $post_image . ');' :
  '';

get_header();

if(have_posts()): while(have_posts()): the_post();
?>
<div class="single--post__wrapper">
  <section class="page--title">
      <h1><?php echo the_title(); ?></h1>
  </section>
  <div class="featured--image" style="<?php echo $featured_image; ?>"></div>
  <article>
      <?php if($content); ?>
        <p><?php echo the_content(); ?></p>
  </article>
</div>

<?php
endwhile; else:
  echo 'Sorry, no posts matched your criteria';
endif;

get_footer();
