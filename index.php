 
<?php get_header(); ?>


<div class="container">
    <!-- Featured slider -->
<div class="flexslider ten columns">
  <ul class="slides">
      <?php query_posts(array('category_name' => 'feature', 'posts_per_page' => 3));
        if(have_posts()) : while(have_posts()) : the_post(); ?>
    <li>
      <?php the_post_thumbnail('feature'); ?>
    </li>
    <?php 
        endwhile;
        endif; 
        wp_reset_query();
?>

  </ul>
</div>
        <section class="ten columns">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="ten columns post">
          <?php the_post_thumbnail('post_img'); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>
          <?php endwhile; else : ?>
            <?php echo "NO posts found" ?>
            <?php endif; ?>
		
</section>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
    