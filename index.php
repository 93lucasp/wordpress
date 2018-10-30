<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content();?>
				
				<span class="post-meta">Posted by <?php the_author(' ');?> on <?php the_time('l, F jS, Y')?></span>
				<?php edit_post_link(__('Edit This Post'));?>
			</div><!-- .post --> 
			<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?> 
	<?php 
    query_posts(array( 
        'post_type' => 'portfolio',
        'showposts' => 10 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
<?php endwhile;?>
	
	
		
<?php get_footer(); ?>