<?php
/* customizing the loop */

  $args = array(
    // 'category_name' => 'technologie',
    'posts_per_page' => 5
  );

  $the_query = new WP_Query($args);
?>

<div id="blog-articles" class="blog-wrapper"> <!-- col-2-items -->
  <?php if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="single-post-summary"> <!-- col-2-items -->
        <div>
          <h1 class="post-title"><a href="<?php the_permalink(); ?> ">
            <?php the_title(); ?></a></h1>
          <div class="featured-image"><a href="<?php the_permalink(); ?> ">
            <?php The_post_thumbnail('blog-thumbnail'); ?>
            <span class="image-overlay"></span></a>
          </div>
          <div class="post-meta">
            <em>Posted on - <?php echo get_the_date(); ?></em>
            <br/>
            <em>Written by - <?php the_author(); ?></em>
            <!-- <br/>
            <em><?php the_tags(); ?><em> -->
          </div>
          <?php the_excerpt(); ?>
          <!-- <?php the_category(); ?> -->
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
