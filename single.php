<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>Ciaooooo</p>
					<?php the_content();?>
					
					<span class="post-meta">Posted by <?php the_author(' ');?> on <?php the_time('l, F jS, Y')?>
                    
                    </span>
                    <?php the_tags(); ?>
                    <?php the_category(); ?> 

				</div><!-- .post --> 
				<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        <?comments_template( '', true );;?>

<?php get_footer(); ?>