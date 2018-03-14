<?php get_header(); ?>

	<header style="background-color: <?php the_field('color', 'options'); ?>">
		<a href="<?php echo get_site_url(); ?>">
			<img class="header-logo" src="<?php the_field('header_logo', 'options'); ?>" />
		</a>
	</header>
	
	<div class="content">
		<div class="inner-content row small-up-1 medium-up-3">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'archive' ); ?>	
			<?php endwhile; ?>		
			<?php else : ?>							
				<?php get_template_part( 'parts/content', 'missing' ); ?>		
			<?php endif; ?>																				
		</div>    
	</div>

<?php get_footer(); ?>