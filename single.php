 
<?php get_header(); ?>


<div class="container">
        <section class="ten columns">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="ten columns post ">
            <?php the_post_thumbnail('feature'); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_content(); ?>
		</div>
          <?php endwhile; else : ?>
            <?php echo "NO posts found" ?>
            <?php endif; ?>
		<h1>Comments</h1>
</section>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>