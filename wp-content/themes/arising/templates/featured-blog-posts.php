<?php $loop = new WP_Query( 'posts_per_page=4' ); ?>
<section class="section-wrapper">
  <h2 class="section-title">Latest Blog Posts</h2>

  <?php while ($loop -> have_posts()) : $loop -> the_post();
    $post_image = wp_get_attachment_image_src(
      get_post_thumbnail_id(),
      'full'
    )[0];
    $featured_image = $post_image ?
      'background-image: url(' . $post_image . ');' :
      '';
    ?>

  <section class="featured-blog__listing grid">

      <article class="featured-blog__listing--item grid_col col-2">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?>
          <div class="listing--image" style="<?php echo $featured_image; ?>"></div>
          <time datetime="<?php echo get_the_time(Y-m-d); ?>"><?php echo get_the_time('F j Y'); ?></time>
          <div><?php the_excerpt(__('(more…)')); ?></div>
        </a>

      </article>
    </section>
</section>

<?php
endwhile;
wp_reset_postdata();
