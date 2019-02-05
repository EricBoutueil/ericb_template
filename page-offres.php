<?php
/**
* Template Name: Sample Page
*
*/
?>


<?php get_header(); ?>

<?php
/* customizing the loop */

  $args = array(
    'post_type' => 'offres'
  );

  $the_query = new WP_Query($args);
?>

<div id="blog-articles" class="blog-wrapper"> <!-- col-2-items -->
  <?php if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div>
          <h1 class="post-title"><a href="<?php the_permalink(); ?> ">
            <?php the_title(); ?></a></h1>
        </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
