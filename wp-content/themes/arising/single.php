<?php
get_header();

if(have_posts()): while(have_posts()): the_post();
?>
<div class="single--post__wrapper">
  <section class="page--title">
      <h1><?php echo the_title(); ?></h1>
  </section>
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
