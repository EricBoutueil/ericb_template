<h1><a href="<?php the_permalink(); ?> "> <?php the_title(); ?></a></h1>
<?php The_post_thumbnail('blog-thumbnail'); ?>
<br/>
<em>Posted on - <?php echo get_the_date(); ?></em>
<br/>
<em>Written by - <?php the_author(); ?><em>
<br/>
<em><?php the_tags(); ?><em>
<br/><br/>
<?php the_excerpt(); ?>
<?php the_category(); ?>
