<?php
/**
* Template for displaying single offre
*/
?>

<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_field('bold_text'); ?></p>
      <p><?php the_field('normal_text'); ?></p>
      <div>
        <?php if( get_field('image') ): ?>
          <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>
      </div>

    <?php endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
